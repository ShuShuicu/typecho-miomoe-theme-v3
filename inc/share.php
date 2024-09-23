<?php
/**
 * 主题分享功能
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<button class="mdui-btn mdui-btn-icon mdui-text-color-theme-icon" mdui-dialog="{target: '#share'}">
    <img src="<?php $this->options->themeUrl('assets/images/svg/share.svg'); ?>" />
</button>
<div class="mdui-dialog" id="share" style="border-radius: 8px">
    <div class="mdui-dialog-title mdui-text-truncate">分享本文<small> · <?php $this->title() ?></small></div>
    <div class="mdui-divider"></div>
    <div class="mdui-dialog-content mdui-text-center">
        <?php  
            // 假设get_ArticleThumbnail函数返回第一张图片的URL，如果没有则返回null  
            $thumbnailStyle = $this->fields->thumbnail_Style; // 假设这里直接访问字段值，具体取决于你的Typecho字段处理方式  
            $thumbnailUrl = $thumbnailStyle ? $thumbnailStyle : get_ArticleThumbnail($this);  
            if ($thumbnailUrl):  
            // 如果缩略图URL存在，则输出缩略图  
        ?>
        <div class="mdui-chip">
            <img class="mdui-chip-icon" src="<?php $this->options->themeUrl('assets/images/svg/qq.svg'); ?>" />
            <span class="mdui-chip-title">
                <a target="_blank" href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&sharesource=qzone&title=<?php $this->title() ?>&pics=<?php echo htmlspecialchars($thumbnailUrl); ?>&summary=<?php $this->excerpt(); ?>&desc=<?php $this->excerpt(60, '......'); ?>" style="color: inherit;"> QQ好友 </a>
            </span>
        </div>
        <div class="mdui-chip">
            <img class="mdui-chip-icon" src="<?php $this->options->themeUrl('assets/images/svg/qq-zone.svg'); ?>" />
            <span class="mdui-chip-title">
                <a target="_blank" href="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&sharesource=qzone&title=<?php $this->title() ?>&pics=<?php echo htmlspecialchars($thumbnailUrl); ?>&summary=<?php $this->excerpt(120, '......'); ?>" style="color: inherit;"> QQ空间 </a>
            </span>
        </div>
        <div class="mdui-chip">
            <img class="mdui-chip-icon" src="<?php $this->options->themeUrl('assets/images/svg/weibo.svg'); ?>" />
            <span class="mdui-chip-title">
                <a target="_blank" href="https://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&pic=<?php echo htmlspecialchars($thumbnailUrl); ?>&searchPic=false" style="color: inherit;"> 新浪微博 </a>
            </span>
        </div>
        <div class="mdui-chip">
            <img class="mdui-chip-icon" src="<?php $this->options->themeUrl('assets/images/svg/x.svg'); ?>" />
            <span class="mdui-chip-title">
                <a target="_blank" href="https://twitter.com/share?text=<?php $this->title() ?>&url=<?php $this->permalink() ?>" style="color: inherit;"> Twitter(X) </a>
            </span>
        </div>
        <div class="mdui-chip">
            <img class="mdui-chip-icon" src="<?php $this->options->themeUrl('assets/images/svg/facebook.svg'); ?>" />
            <span class="mdui-chip-title">
                <a target="_blank" href="https://www.facebook.com/sharer.php?title=<?php $this->title() ?>&u=<?php $this->permalink() ?>" style="color: inherit;"> Facebook </a>
            </span>
        </div>
        <?php endif; ?>
        <div class="mdui-dialog-actions">
        <div class="mdui-divider"></div>
            <div class="mdui-chip" mdui-dialog-cancel>
            <span class="mdui-chip-title">
                <i class="mdui-icon material-icons">highlight_off</i><b> 关闭 </b>
            </span>
        </div>
        </div>
    </div>
</div>