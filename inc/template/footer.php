<?php
/**
 * 底部文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
    </div>
        <div class="mdui-hidden-sm-down mdui-fab-wrapper" mdui-fab="{trigger: 'hover'}">
            <button class="mdui-fab mdui-ripple mdui-color-theme-accent">
                <i class="mdui-icon material-icons">add</i>
                <i class="mdui-icon mdui-fab-opened material-icons">cancel</i>
            </button>
            <div class="mdui-fab-dial">
                <a href="https://blog.miomoe.cn/" target="_blank">
                    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink" mdui-tooltip="{content:'同款主题'}">
                        <i class="mdui-icon material-icons">code</i>
                    </button>
                </a>
                <a href="#top">
                    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-blue" mdui-tooltip="{content:'网站顶部'}">
                        <i class="mdui-icon material-icons">keyboard_arrow_up</i>
                    </button>
                </a>
                <a href="#bottom">
                    <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-cyan" mdui-tooltip="{content:'网站底部'}">
                        <i class="mdui-icon material-icons">keyboard_arrow_down</i>
                    </button>
                </a>
                <button id="searchFooter" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-red" mdui-tooltip="{content:'搜索文章'}">
                    <i class="mdui-icon material-icons">search</i>
                </button>
                <button id="toggleThemeFooter" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-orange" mdui-tooltip="{content:'切换主题'}">
                    <i class="mdui-icon material-icons">brightness_medium</i>
                </button>
            </div>
        </div>
    </div>
    <footer id="bottom" style="display: block;unicode-bidi: isolate;">
        <div class="mdui-valign">
            <img class="mdui-center" src="<?php $this->options->themeUrl('assets/images/end.png'); ?>"></img>
        </div>
	    <div class="mdui-card">
		    <div class="mdui-container">
			    <div class="mdui-row mdui-p-y-4">
				    <div class="mdui-typo mdui-col-xs-4 mdui-col-md-3 mdui-col-offset-md-1">
					    <div class="mdui-float-left">
                            <div>Powered by <a href="http://typecho.org" target="_blank">Typecho</a></div>
                            <div>页面加载时间<?php echo timer_stop();?></div>
					    </div>
				    </div>
				    <div class="mdui-typo mdui-col-xs-4 mdui-col-md-4">
					    <div class="mdui-text-center">
                            <div>© <?php echo date("Y"); ?> Copyright <a href="<?php $this->options->siteUrl(); ?>"><b><?php $this->options->title(); ?></b></a> 版权所有</div>
                            <div><?php if ($this->options->icpCode) { echo '<a href="https://beian.miit.gov.cn/" target="_blank" rel="external nofollow noopener">' . $this->options->icpCode . '</a>'; } else { echo '正在努力备案中...'; } ?></div>
					    </div>
				    </div>
				    <div class="mdui-col-xs-4 mdui-col-md-3">
					    <div class="mdui-float-right">
                            <div>
                                <a href="<?php echo $this->options->bilibiliUrl; ?>" target="_blank" rel="external nofollow noopener" class="mdui-ripple mdui-tab-active">
                                    <button class="mdui-btn mdui-btn-icon mdui-text-color-theme-icon" mdui-tooltip="{content: 'B站', position: 'top'}">
                                        <i class="miov3-icon" style="background-image: url(<?php $this->options->themeUrl('assets/images/svg/bilibili.svg'); ?>);cursor: default"></i>
                                    </button>
                                </a>
                                <a href="<?php echo $this->options->qqUrl; ?>" target="_blank" rel="external nofollow noopener" class="mdui-ripple mdui-tab-active">
                                    <button class="mdui-btn mdui-btn-icon mdui-text-color-theme-icon" mdui-tooltip="{content: 'QQ', position: 'top'}">
                                        <i class="miov3-icon" style="background-image: url(<?php $this->options->themeUrl('assets/images/svg/qq-1.svg'); ?>);cursor: default"></i>
                                    </button>
                                </a>
                                <a href="mailto:<?php echo $this->options->Email; ?>" class="mdui-ripple mdui-tab-active">
                                    <button class="mdui-btn mdui-btn-icon mdui-text-color-theme-icon" mdui-tooltip="{content: 'Mail', position: 'top'}">
                                        <i class="miov3-icon" style="background-image: url(<?php $this->options->themeUrl('assets/images/svg/mail.svg'); ?>);cursor: default"></i>
                                    </button>
                            </a>
                            </div>
                            <div class="mdui-typo"><?php echo get_themeCopyright(); ?></div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </footer>
</div>
<?php $this->footer(); ?>
<script src="<?php echo get_assetUrl('assets/js/miomoe-v3.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/mdui.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/view-image.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/sweetalert2.all.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/code/prism.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/code/clipboard.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/nprogress.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/jquery-3.7.1.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/jquery.pjax.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script>
    $(document).ready(function() {
        // PJAX
        $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
            container: '#pjax-container',
            fragment: '#pjax-container',
            timeout: 3000
        });

        $(document).on('pjax:send', function() {
            NProgress.start();
        });

        $(document).on('pjax:complete', function() {
            NProgress.done();
            mdui.Tooltip.init(); // 重新初始化工具提示
            console.log('PJAX complete event triggered');

            // 代码高亮
            if (typeof Prism !== 'undefined') {
                var pres = document.getElementsByTagName('pre');
                for (var i = 0; i < pres.length; i++) {
                    if (pres[i].getElementsByTagName('code').length > 0) {
                        pres[i].className = 'line-numbers';
                    }
                }
                Prism.highlightAll(true, null);
            }
        });

        // 初始化工具提示
        mdui.Tooltip.init();
    });
</script>
<?php $this->options->jsStyleCode(); ?>
</body>
</html>