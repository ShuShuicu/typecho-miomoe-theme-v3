<?php
/**
 * 这是MioV3主题(原MioMoeV3)的第一个重写版本(第三个重构版)。
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @version 1.1.0
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
$this->need('header.php'); 
$this->need("inc/template/index/" . ($this->options->indexStyle) . ".php"); 
$this->need('footer.php'); 
?>