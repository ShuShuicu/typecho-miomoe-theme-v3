<?php
/**
 * 主题下载功能
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2"></div>
<div class="mdui-card mdui-hoverable" id="postEnd">
    <div class="mdui-card-header">
            <img class="mdui-card-header-avatar mdui-ripple mdui-img-fluid mdui-img-rounded" src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : $this->options->themeUrl . '/assets/images/avatar.jpg'; ?>">
            <div class="mdui-card-header-title">
                <?php $this->author(); ?>
            </div>
            <div class="mdui-card-header-subtitle">
                <?php $this->options->postEndAuthorInfo(); ?>
            </div>
    </div>
</div>

<div class="mdui-m-y-2"></div>
<div class="mdui-card mdui-hoverable mdui-card-content">
    
    <div class="mdui-chip">
        <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">timer</i></span>
        <span class="mdui-chip-title"><?php $this->date(); ?></span>
    </div>
    <div class="mdui-chip">
        <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">folder</i></span>
        <span class="mdui-chip-title"><?php $this->category(',', true, '暂无分类'); ?></span>
    </div>
    <div class="mdui-chip">
        <span class="mdui-chip-icon mdui-color-theme"><i class="mdui-icon material-icons">local_offer</i></span>
        <span class="mdui-chip-title"><?php $this->tags(',', true, '暂无标签'); ?></span>
    </div>

    <div class="mdui-float-right" data-pjax="false">
        <?php require_once 'reward.php'; ?>
    </div>
    
</div>
