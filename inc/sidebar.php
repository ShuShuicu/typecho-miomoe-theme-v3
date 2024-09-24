<?php
/**
 * 侧边栏文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-5"></div>
<div class="mdui-col-xl-3 mdui-col-lg-4 mdui-col-md-4 mdui-col-sm-12 mdui-col-xs-12" id="sidebar" data-pjax="false">
<?php 
    require_once 'sidebar/info.php'; 
    require_once 'sidebar/search.php'; 
    require_once 'sidebar/tab.php'; 
    require_once 'sidebar/code.php'; 
?>
</div>