<?php
/**
 * 文章页顶图文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2 mdui-col-xl-9 mdui-col-lg-8 mdui-col-md-8 mdui-col-sm-12 mdui-col-xs-12" id="pjax-container">
    <div class="mdui-center">
        <div class="mdui-card mdui-hoverable" style="border-radius: 8px">
            <div class="mdui-card-media mdui-hoverable">
            <?php  
                // 假设get_ArticleThumbnail函数返回第一张图片的URL，如果没有则返回null  
                $thumbnailStyle = $this->fields->thumbnail_Style; // 假设这里直接访问字段值，具体取决于你的Typecho字段处理方式  
                $thumbnailUrl = $thumbnailStyle ? $thumbnailStyle : get_ArticleThumbnail($this);  
                if ($thumbnailUrl):  
                // 如果缩略图URL存在，则输出缩略图  
            ?>
                <div class="thumbnail-post" style="background:url(<?php echo htmlspecialchars($thumbnailUrl); ?>);"></div>
                <?php endif; ?>
                <div class="mdui-card-media-covered">
                    <div class="mdui-card-primary">
                        <div class="mdui-card-primary-title"><?php $this->title() ?></div>
                    </div>
                </div>
            </div>
            <div class="mdui-divider"></div>
            <div class="mdui-card-actions">
            <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">folder</i></span>
                    <span class="mdui-chip-title"><?php $this->category(',', true, '暂无分类'); ?></span>
                </div>
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">local_offer</i></span>
                    <span class="mdui-chip-title"><?php $this->tags(',', true, '暂无标签'); ?></span>
                </div>
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">bookmark</i></span>
                    <span class="mdui-chip-title">共<?php art_count($this->cid); ?>字 </span>
                </div>
                <div class="mdui-chip">
                    <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">timer</i></span>
                    <span class="mdui-chip-title"><?php $this->date(); ?></span>
                </div>
                <div class="mdui-float-right" data-pjax="false">
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
                        <div class="mdui-float-right" data-pjax="false">
                            <?php $this->need('inc/reward.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php if ($this->comments()->have() || $this->allow('comment')): ?>
    <?php $this->need('comments.php'); ?>
<?php endif; ?>
</div>
<?php 
$this->need('sidebar.php'); 
?>