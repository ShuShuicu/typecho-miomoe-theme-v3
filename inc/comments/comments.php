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
    

<div class="mdui-m-y-2">
    <div class="mdui-card mdui-hoverable" style="border-radius: 8px">
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
</div>
<script>
    $('#comment-form').on('submit', function(event) {
        event.preventDefault(); // 阻止默认提交
        const form = $(this);
        $.post(form.attr('action'), form.serialize(), function(response) {
            // 处理提交成功后的逻辑
            loadComments(); // 重新加载评论
        }).fail(function() {
            alert('提交评论失败，请重试。');
        });
    });
</script>