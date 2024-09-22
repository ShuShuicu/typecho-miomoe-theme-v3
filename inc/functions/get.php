<?php 
/**
 * functions Get代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
/**
 * Get内容
 */
// 获取主题版本号
function get_ver() {
    $ver = Typecho_Plugin::parseInfo(dirname(__DIR__) . '/../index.php');
    return $ver['version'];
}
// 获取主题最新版本号
function get_apiNewVer() {
    $apiUrl = 'https://api.miomoe.cn/themes/MioMoeV3?ver';
    $newVer = @file_get_contents($apiUrl);
    if ($newVer === false) {
        return "Api连接超时！";
    } else {
        return $newVer;
    }
}
// 获取设置页面介绍
function get_apiInfo() {
    $apiUrl = 'https://api.miomoe.cn/themes/MioMoeV3?info'; 
    $info = @file_get_contents($apiUrl);
    if ($info === false) {
        return "Api连接超时，请检查服务器网络环境！<br>如有问题请联系作者QQ：1778273540";
    } else {
        return $info;
    }
}
// 主题版权
function get_themeCopyright() {  
    echo '
        Theme · <a href="https://blog.miomoe.cn/" target="_blank">MioV3!</a>
    ';   
}
// 获取assetsUrl
function get_assetUrl($path) {
    $cdnUrl = Typecho_Widget::widget('Widget_Options')->assetsCdn;
    if ($cdnUrl === 'default') {
        return Typecho_Widget::widget('Widget_Options')->themeUrl($path);
    } else {
        return $cdnUrl . $path;
    }
}