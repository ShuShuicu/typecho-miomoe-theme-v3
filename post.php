<?php
/**
 * 文章页文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
$this->need('header.php'); 
$this->need("inc/template/posts/" . ($this->options->postStyle) . ".php"); 
$this->need('footer.php'); 
?>