<?php
/**
 * 主题打赏功能
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<button class="mdui-btn mdui-btn-icon mdui-text-color-theme-icon" mdui-dialog="{target: '#reward'}">
    <img src="<?php $this->options->themeUrl('assets/images/svg/reward.svg'); ?>" class="mdui-ripple mdui-img-fluid mdui-img-rounded" />
</button>
<div class="mdui-typo mdui-dialog" id="reward" style="border-radius: 8px">
    <div class="mdui-dialog-title mdui-text-truncate">打赏作者<small> · <?php $this->author() ?></small></div>
    <div class="mdui-divider"></div>
    <div class="mdui-dialog-content">
        <div class="mdui-divider"></div>
        
            <img class="mdui-center" src="<?php echo $this->options->rewardPayImg ? $this->options->rewardPayImg : $this->options->themeUrl . '/assets/images/wechat-pay.jpg'; ?>">

    </div>
    <div class="mdui-dialog-actions">
    <div class="mdui-divider"></div>
        <div class="mdui-chip" mdui-dialog-cancel>
            <span class="mdui-chip-title">
                <i class="mdui-icon material-icons">highlight_off</i><b> 关闭 </b>
            </span>
        </div>
    </div>
</div>