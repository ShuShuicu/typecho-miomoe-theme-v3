<?php
/**
 * 主题友情链接页面提交链接功能
 * 拿评论系统改的
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
    <?php $this->comments()->to($comments); ?>

<?php if ($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
        </div>

        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if ($this->user->hasLogin()): ?><?php _e('登录身份: '); ?><a><?php $this->user->screenName(); ?></a>

            <?php else: ?>

                <div class="mdui-divider"></div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">web</i>
                        <label class="mdui-textfield-label">站点名称·SiteName</label>
                        <input class="mdui-textfield-input" type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" />
                    </div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">email</i>
                        <label class="mdui-textfield-label">联系邮箱·E-Mail</label>
                        <input class="mdui-textfield-input" type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" />
                    </div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">link</i>
                        <label class="mdui-textfield-label">站点链接·SiteLink</label>
                        <input class="mdui-textfield-input" type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" />
                    </div>

            <?php endif; ?>

                    <div class="mdui-textfield">
                        <textarea class="mdui-textfield-input" rows="4" cols="50" name="text" placeholder="请输入您的站点描述。"><?php $this->remember('text'); ?></textarea>
                    </div>

                <div class="">


                <dic class="mdui-m-y-2 mdui-float-right">
                        <button type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent submit"><?php _e('提交链接'); ?></button>
                </div>

                <?php $security = $this->widget('Widget_Security'); ?>
                <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
            </p>
        </form>
    </div>
<?php else: ?>
    <h3><?php _e('已关闭提交链接。'); ?></h3>
<?php endif; ?>