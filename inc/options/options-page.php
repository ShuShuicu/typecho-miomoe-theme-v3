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

<div class="mdui-m-y-2 mdui-card mdui-hoverable" style="border-radius: 8px;">
<div class="mdui-card-media mdui-card-content">
    <div class="mdui-card-primary-title mdui-text-truncate">
            感谢使用MioV3！
                <a class="mdui-float-right mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '喜欢的话点个Star吧！'}" mdui-dialog="{target: '#Stars'}">
                    <i class="mdui-icon material-icons">stars</i>
                </a>
        <br><small>
        <div class="mdui-divider"></div>
            当前版本：<?php echo get_ver(); ?>丨最新版本：<?php echo get_apiNewVer(); ?>
            <a href="https://gitee.com/ShuShuicu/typecho-miomoe-theme-v3" target="_blank" class="mdui-float-right mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '下载最新版本'}">
                <i class="mdui-icon material-icons">file_download</i>
            </a>
        </small>
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
    <p>欢迎使用MioV3！</p>
    <p>联系作者：
    鼠子(ShuShuicu)
    <br>B站: @ShuShuicu
    <br>QQ: 1778273540
    <br>E-Mail: <a href="mailto:tweis@shushu.icu">tweis@shushu.icu</a></p>
</div>

<div class="mdui-dialog" id="Stars">
    <div class="mdui-dialog-title"><i class="mdui-icon material-icons">star</i>感谢支持！</div>
    <div class="mdui-divider"></div>
    <div class="mdui-dialog-content">
        Gitee：<a href="https://gitee.com/ShuShuicu/typecho-miomoe-theme-v3" target="_blank">https://gitee.com/ShuShuicu/typecho-miomoe-theme-v3</a>
        <br>GitHub：<a href="https://github.com/ShuShuicu/typecho-miomoe-theme-v3" target="_blank">https://github.com/ShuShuicu/typecho-miomoe-theme-v3</a>
        <p>以上是MioV3的开源地址，感谢大家点的Star！</p>
    </div>
    <div class="mdui-dialog-actions">
        <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button>
    </div>
</div>

</div>

<div class="mdui-typo mdui-card-content" id="主题设置" style="padding-left:4%;padding-right:4%;">
<?php 
    require_once 'code/backups.php'; 
    require_once 'code/opcache.php'; 
    require_once 'code/basics.php'; 
    require_once 'code/sidebar.php'; 
    require_once 'code/other.php'; 
    require_once 'code/style-code.php'; 
}
