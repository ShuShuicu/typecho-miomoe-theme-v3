<?php 
/**
 * functions 文章类代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
/**
 * 缩略图
 */
function get_RandomThumbnail($base_url, $maxImages = 10) {  
    // 生成一个1到$maxImages之间的随机数  
    $rand = mt_rand(1, $maxImages);  
    // 构造随机缩略图的URL  
    $randomImage = $base_url . $rand . '.jpg';  
    return $randomImage;  
}  
function get_ArticleThumbnail($widget) {  
    // 自定义缩略图逻辑  
    $thumb = $widget->fields->thumb; // 如果有自定义缩略图，直接使用  
    if ($thumb) {  
        return $thumb;  
    }  
    // 尝试从内容中提取图片URL  
    $pattern = '/<img.*?src="(.*?)"[^>]*>/i';  
    if (preg_match($pattern, $widget->content, $thumbUrl) && strlen($thumbUrl[1]) > 7) {  
        return $thumbUrl[1];  
    }  
    // 尝试从附件中获取图片URL  
    $attach = $widget->attachments(1)->attachment;  
    if ($attach && $attach->isImage) {  
        return $attach->url;  
    }  
    // 如果没有找到图片，则生成随机缩略图  
    $base_url = '/assets/images/thumb/'; // 默认缩略图路径  
    // 如果设置了articleImgSpeed，则使用它作为图片的基本URL  
    if (!empty(Helper::options()->articleImgSpeed)) {  
        $base_url = Helper::options()->articleImgSpeed;  
        // 确保URL以斜杠结尾  
        if (substr($base_url, -1) !== '/') {  
            $base_url .= '/';  
        }  
    } else {  
        // 使用themeUrl和默认的图片路径  
        $base_url = $widget->widget('Widget_Options')->themeUrl . $base_url;  
    }  
    // 调用辅助函数获取随机缩略图  
    return get_RandomThumbnail($base_url);  
}  

/**
 * 随机文章
 */
class Widget_Post_tongleisuiji extends Widget_Abstract_Contents
{
    public function __construct($request, $response, $params = NULL)
    {
        parent::__construct($request, $response, $params);
        $this->parameter->setDefault(array('pageSize' => $this->options->commentsListSize, 'parentId' => 0, 'ignoreAuthor' => false));
    }
    public function execute()
    {
    $adapterName = $this->db->getAdapterName();//兼容非MySQL数据库
    if($adapterName == 'pgsql' || $adapterName == 'Pdo_Pgsql' || $adapterName == 'Pdo_SQLite' || $adapterName == 'SQLite'){
        $order_by = 'RANDOM()';
    }else{
        $order_by = 'RAND()';
    }   
$select  = $this->select()->from('table.contents')
->join('table.relationships', 'table.contents.cid = table.relationships.cid');
if($this->parameter->mid>0){
$select->where('table.relationships.mid = ?', $this->parameter->mid);
}
$select->where('table.contents.cid <> ?', $this->parameter->cid)
->where("table.contents.password IS NULL OR table.contents.password = ''")
->where('table.contents.type = ?', 'post')
->limit($this->parameter->pageSize)
->order($order_by);
$this->db->fetchAll($select, array($this, 'push'));
    }
}
// 随机一篇文章
// 直接调用randomPost()即可输出随机出来的文章地址，使用randomPost("return")可返回随机到的文章地址。
function randomPost($type='echo') {
    $db = Typecho_Db::get();
    $result = $db->fetchRow($db->select()->from('table.contents')->where('type=?', 'post')->where('status=?', 'publish')->limit(1)->order('RAND()'));
    if($result) {
        $f=Helper::widgetById('Contents',$result['cid']);
        $permalink = $f->permalink;
        if($type=="return"){return $permalink;}else{echo $permalink;}
    } else {
        if($type=="return"){return false;}else{echo "没有文章可随机";}
    }
}
// api
// ?random=true
function themeInit($archive)
{
if($archive->request->isGet() && $archive->request->get('random')){
    header('Location: '.randomPost('return'));exit;
}
}
