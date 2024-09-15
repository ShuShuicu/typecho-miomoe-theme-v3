<?php
/**
 * 侧边栏介绍
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
    <div class="mdui-m-y-2 mdui-card mdui-hoverable" style="border-radius: 8px;">
        <div class="mdui-card-header">
            <img class="mdui-card-header-avatar" src="<?php echo $this->options->sidebarImg ? $this->options->sidebarImg : $this->options->themeUrl . '/assets/images/avatar.jpg'; ?>" />
            <div class="mdui-card-header-title">
                <?php echo $this->options->sidebarTitle ? $this->options->sidebarTitle : $this->options->title(); ?>
            </div>
            <div class="mdui-card-header-subtitle">
                <?php echo $this->options->sidebarSubTitle ? $this->options->sidebarSubTitle : $this->options->subTitle; ?>
            </div>
        </div>
        <div class="mdui-divider"></div>
        <div class="mdui-card-content">
            <?php echo $this->options->sidebarInfo ? $this->options->sidebarInfo : $this->options->description(); ?>
        </div>
    </div>
