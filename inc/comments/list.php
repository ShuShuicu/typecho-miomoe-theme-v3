<?php 
/**
 * 评论列表文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>

<div class="mdui-m-y-2">
    <div class="mdui-typo mdui-paper mdui-center" id="comments">
            <?php $this->commentsNum(_t('<div class="mdui-text-truncate mdui-text-center">万水千山总是情，评论一句行不行~</div>'), _t(''), _t('')); ?>
        <?php $this->comments()->to($comments); ?>
        <?php if ($comments->have()): ?>
        <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
        <div class="mdui-typo" id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php while($comments->next()): ?>
            <div class="mdui-m-y-2 mdui-card mdui-hoverable" style="border-radius: 8px;" id="<?php $comments->theId(); ?>">
                <div class="mdui-card-header">
                    <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=<?php $comments->mail(); ?>&spec=640">
                    <div class="mdui-card-header-title"><?php $comments->author(); ?></div>
                    <div class="mdui-card-header-subtitle">
                        <?php $comments->date('Y-m-d'); ?> · <?php echo $comments->date('h:i a'); ?>
                        <div class="mdui-float-right"><?php $comments->reply(); ?></div>
                    </div>
                </div>
                <div class="mdui-divider"></div>
                <div class="mdui-card-content">
                    <?php $comments->content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>