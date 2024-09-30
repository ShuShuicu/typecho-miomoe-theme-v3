<?php
/**
 * 
 * 主题独立页面模板
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-5"></div>
<div class="mdui-typo mdui-center">
<div class="mdui-card mdui-hoverable">
    <div class="mdui-card-media mdui-card-content">
        <div class="mdui-card-primary-title mdui-text-truncate"><?php $this->title() ?></div>
    </div>
        <div class="mdui-divider"></div>
        <div class="mdui-card-actions">
        <div class="mdui-chip">
			<span class="mdui-chip-icon mdui-color-theme">
                <img src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : $this->options->themeUrl . '/assets/images/avatar.jpg'; ?>" class="mdui-img-fluid"/></span>
			<span class="mdui-chip-title"><?php $this->author(); ?></span>
		</div>
        <div class="mdui-chip">
			<span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">timer</i></span>
			<span class="mdui-chip-title"><?php $this->date(); ?> </span>
		</div>
        </div>
        <div class="mdui-divider"></div>
        <div class="mdui-card-content post-container" id="content" style="padding-left:4%;padding-right:4%;">
                <?php $this->content(); ?>
        </div>
</div>
</div>