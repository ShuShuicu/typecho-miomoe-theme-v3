<?php 
/**
 * functions代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
//判断 PHP 版本是否达到要求
if (substr(PHP_VERSION, 0, 3) < '7.3') {
    echo '<h2>PHP版本必须 >= 7.3，否则搜索页面出错。</h2>';
    die();
}
// 引入核心文件
require_once 'functions/common.php'; 
require_once 'functions/get.php'; 
require_once 'functions/article.php'; 
// 编辑器
require_once 'editor/code.php'; 
require_once 'editor/field.php'; 
// 设置页面
require_once 'options/options-page.php'; 
