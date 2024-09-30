<?php
/**
 * 主题友情链接页面
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-5 mdui-center">
<div class="mdui-card mdui-hoverable">
    <div class="mdui-card-media mdui-card-content">
        <div class="mdui-card-primary-title mdui-text-truncate"><?php $this->title() ?></div>
        <div class="mdui-divider"></div>
        <div class="mdui-card-actions">
            <div class="mdui-tab mdui-tab-full-width" mdui-tab>
                <a href="#友情链接" class="mdui-ripple">
                    <i class="mdui-icon material-icons">insert_link</i>
                    <label>友情链接</label>
                </a>
                <a href="#申请友链" class="mdui-ripple">
                    <i class="mdui-icon material-icons">format_list_bulleted</i>
                    <label>申请友链</label>
                </a>
            </div>
        </div>
        <div class="mdui-divider"></div>
    </div>
        <div class="mdui-card-content post-container" id="友情链接" style="padding-left:4%;padding-right:4%;">
            <?php echo $this->options->linksContent; ?>
        </div>
        <div class="mdui-card-content post-container" id="申请友链" style="padding-left:4%;padding-right:4%;">
            
            <?php $this->need('inc/functions/pages/links-comments.php'); ?>
    </div>
</div>
</div>