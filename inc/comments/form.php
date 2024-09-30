<?php 
/**
 * 评论表单文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<?php if ($this->allow('comment')): ?>
<div id="<?php $this->respondId(); ?>" class="respond">
    <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
    </div>
    <div class="mdui-m-y-2 mdui-typo mdui-card mdui-hoverable mdui-card-content">
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if ($this->user->hasLogin()): ?>
                <?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
            <?php else: ?>
            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">account_circle</i>
                <label class="mdui-textfield-label">名称·Name</label>
                <input class="mdui-textfield-input" type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" />
            </div>
            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">email</i>
                <label class="mdui-textfield-label">邮箱·E-Mail</label>
                <input class="mdui-textfield-input" type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" />
            </div>
            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">link</i>
                <label class="mdui-textfield-label">主页链接·Link</label>
                <input class="mdui-textfield-input" type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" />
            </div>
            <?php endif; ?>
            <div class="mdui-divider"></div>
            <div class="mdui-textfield">
                <textarea class="mdui-textfield-input" rows="4" cols="50" name="text" placeholder="万水千山总是情，评论一句行不行~"><?php $this->remember('text'); ?></textarea>
            </div>
            <button type="submit" class="mdui-float-right mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent submit"><?php _e('提交评论'); ?></button>
        </form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>