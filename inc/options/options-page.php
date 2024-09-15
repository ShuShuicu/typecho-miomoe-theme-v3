<?php 
/**
 * 后台设置页面
 * @package MioMoeV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

/**
 * 获取主题Url
 * Blog.MioMoe.Cn
 */
define("THEME_URL", str_replace('//usr', '/usr', str_replace(Helper::options()->siteUrl, Helper::options()->rootUrl . '/', Helper::options()->themeUrl)));
$str1 = explode('/themes/', (THEME_URL . '/'));
$str2 = explode('/', $str1[1]);
define("THEME_NAME", $str2[0]);

function themeConfig($form)
{
?>
<link href="<?php echo THEME_URL ?>/assets/admin/options.css?v=<?php echo get_ver(); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo THEME_URL ?>/assets/css/mdui.min.css?v=<?php echo get_ver(); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo THEME_URL ?>/assets/css/mdx-icons.css?v=<?php echo get_ver(); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo THEME_URL ?>/assets/js/mdui.min.js?v=<?php echo get_ver(); ?>"></script>
<script>
setTimeout(function() {
    mdui.snackbar({
        message: '欢迎使用MioV3！',
        position: 'top',
    });
}, 1145);
</script>
<div class="mdui-m-y-2 mdui-card mdui-hoverable">
<div class="mdui-card-media mdui-card-content">
    <div class="mdui-card-primary-title mdui-text-truncate">
        感谢使用MioV3！
        <br><small>当前版本：<?php echo get_ver(); ?>丨最新版本：<?php echo get_apiNewVer(); ?></small>
    </div>
</div>
<div class="mdui-divider"></div>
<div class="mdui-tab mdui-tab-full-width" mdui-tab>
    <a href="#主题设置" class="mdui-ripple">
        <i class="mdui-icon material-icons">settings</i>
        <label>主题设置</label>
    </a>
    <a href="#使用说明" class="mdui-ripple">
        <i class="mdui-icon material-icons">info</i>
        <label>使用说明</label>
    </a>
</div>
<div class="mdui-divider"></div>
<div class="mdui-typo mdui-card-content" style="padding-left:4%;padding-right:4%;">

<div id="使用说明">
    <?php echo get_apiInfo(); ?>
</div>
</div>
<div class="mdui-card-content" id="主题设置" style="padding-left:4%;padding-right:4%;">
<?php 
require 'options-code.php'; 
}
