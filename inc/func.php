<?php 
/**
 * functions代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
// 判断 PHP 版本是否达到要求
if (version_compare(PHP_VERSION, '7.3', '<')) {
    echo '<title>人品问题</title>'; 
    echo '<h2>PHP版本大于7.3 · 当前版本' . phpversion() . '</h2>'; 
    echo '<b>请升级您的PHP版本</b>或到usr/themes目录下移除主题;<br><b>切记升级版本后重启一下主题，</b>否则默认设置字段可能失效或出现排版错误等问题。';
    die();
}
// 引入核心文件
require_once 'functions/common.php'; 
require_once 'functions/get.php'; 
require_once 'functions/article.php'; 
// 编辑器
require_once 'functions/editor/code.php'; 
require_once 'functions/editor/field.php'; 
// 设置页面
require_once 'options/options-page.php'; 
