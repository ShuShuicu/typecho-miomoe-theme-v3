<?php 
/**
 * 评论列表文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<?php $this->commentsNum(_t('<p class="mdui-text-center">暂时还没评论呢~ 快去抢沙发吧！</p>'), _t(''), _t('')); ?>
<?php if ($comments->have()): ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    <?php $comments->listComments(); ?>
<?php endif; ?>