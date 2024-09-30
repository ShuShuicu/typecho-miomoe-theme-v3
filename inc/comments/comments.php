<?php 
/**
 * 评论文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    

<div class="mdui-card mdui-hoverable">
    <div class="mdui-card-content">
        <div class="mdui-card-primary-title mdui-text-truncate">
            <i class="mdui-icon material-icons">comment</i>
            <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>
        </div>
        <div class="mdui-divider"></div>
        <?php $this->commentsNum(_t('<p class="mdui-text-center">暂时还没评论呢~ 快去抢沙发吧！</p>'), _t('<p class="mdui-text-center">请不要发毫无意义或内容不文明的评论！</p>'), _t('<p class="mdui-text-center">请不要发毫无意义或内容不文明的评论！</p>')); ?>
        <?php require_once 'form.php'; ?>
        <?php require_once 'list.php'; ?>
        </div>
    </div>
</div>