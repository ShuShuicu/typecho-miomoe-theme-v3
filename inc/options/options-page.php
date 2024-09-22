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
    require_once 'code/component.php'; 
?>
<link href="<?php echo THEME_URL ?>/assets/admin/options.css?v=<?php echo get_ver(); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo THEME_URL ?>/assets/css/mdui.min.css?v=<?php echo get_ver(); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo THEME_URL ?>/assets/js/mdui.min.js?v=<?php echo get_ver(); ?>"></script>
<script>
setTimeout(function() {
    mdui.snackbar({
        message: '欢迎使用MioV3！',
        position: 'top',
    });
}, 1145);
</script>
<?php
    $Component = new Castle_Component($form);
    /* 信息面板 */
    echo $Component->themeInfo(); 
?>
<div class="mdui-m-y-2 mdui-card mdui-hoverable mdui-card-content" style="border-radius: 8px;">
<?php
    echo $Component->themeBackups(); 
    echo $Component->themeApiInfo(); 
    echo $Component->themeOptionsRoutine($form); 
}
?>