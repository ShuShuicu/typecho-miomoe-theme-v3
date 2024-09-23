<?php
/**
 * 文章页文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2 mdui-col-xl-9 mdui-col-lg-8 mdui-col-md-8 mdui-col-sm-12 mdui-col-xs-12">
    <div class="mdui-center">
        <div class="mdui-card mdui-hoverable" style="border-radius: 8px">
            <div class="mdui-card-media mdui-card-content">
                <div class="mdui-card-primary-title"><?php $this->title() ?></div>
            </div>
            <div class="mdui-divider"></div>
            <div class="mdui-card-actions">
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme">
                        <img src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : $this->options->themeUrl . '/assets/images/avatar.jpg'; ?>" class="mdui-img-fluid" /></span>
                    <span class="mdui-chip-title"><?php $this->author(); ?></span>
                </div>
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">apps</i></span>
                    <span class="mdui-chip-title"><?php $this->category(',', true, '暂无分类'); ?></span>
                </div>
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">local_offer</i></span>
                    <span class="mdui-chip-title"><?php $this->tags(',', true, '暂无标签'); ?></span>
                </div>
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">timer</i></span>
                    <span class="mdui-chip-title"><?php $this->date(); ?></span>
                </div>
                <div class="mdui-ripple mdui-float-right">
                    <?php $this->need('inc/reward.php'); ?>
                    <?php $this->need('inc/share.php'); ?>
                </div>
            </div>
            <div class="mdui-divider"></div>
            <div class="mdui-typo mdui-card-content post-container" id="content" style="padding-left:4%;padding-right:4%;font-size: 17px;">
                <?php $this->content(); ?>
            </div>
            <div class="mdui-typo mdui-card">
                <div class="mdui-card-content">
                    <div>
                        <strong>
                            本文链接：
                        </strong>
                        <a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>
                    </div>
                    <div>
                        <strong>
                            版权声明：
                        </strong>
                        <?php echo $this->options->postCopyright; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->need('comments.php'); ?>
</div>
<?php 
$this->need('sidebar.php'); 
?>