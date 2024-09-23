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
    <img src="<?php $this->options->themeUrl('assets/images/svg/reward.svg'); ?>" />
</button>
<div class="mdui-dialog" id="reward" style="border-radius: 8px">
    <div class="mdui-dialog-title mdui-text-truncate">打赏作者<small> · <?php $this->author() ?></small></div>
    <div class="mdui-divider"></div>
    <div class="mdui-dialog-content">
        <div class="mdui-tab mdui-tab-full-width" mdui-tab>
            <a href="#微信" class="mdui-ripple mdui-tab-active">
                <i class="miov3-icon" style="background-image: url(<?php $this->options->themeUrl('assets/images/svg/wechat.svg'); ?>);cursor: default"></i>
                <label>微信</label>
            </a>
            <a href="#支付宝" class="mdui-ripple">
                <i class="miov3-icon" style="background-image: url(<?php $this->options->themeUrl('assets/images/svg/alipay.svg'); ?>);cursor: default"></i>
                <label>支付宝</label>
            </a>
        </div>
        <div class="mdui-divider"></div>
        <div id="微信">
            <img class="mdui-center" src="<?php echo $this->options->rewardWeChatPay ? $this->options->rewardWeChatPay : $this->options->themeUrl . '/assets/images/wechat-pay.jpg'; ?>">
        </div>

        <div id="支付宝">
            <img class="mdui-center" src="<?php echo $this->options->rewardAliPay ? $this->options->rewardAliPay : $this->options->themeUrl . '/assets/images/noscreen.png'; ?>">
        </div>

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