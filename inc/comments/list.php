<?php 
/**
 * 评论列表文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
<?php $comments->listComments(); ?>