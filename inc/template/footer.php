<?php
/**
 * 底部文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-col-xs-12">
<div class="mdui-m-y-2 mdui-typo mdui-card mdui-hoverable mdui-card-content" style="border-radius: 8px;">
    <footer style="display:flex;" id="bottom">
        <div class="mdui-typo-body-1-opacity mdui-text-left">
            Powered by <a href="http://typecho.org" target="_blank" rel="external nofollow noopener">Typecho</a>
            <br>© Copyright <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
        </div>
        <div style="flex-grow:1">
        </div>
        <div class="mdui-typo-body-1-opacity mdui-text-right">
            页面加载时间<?php echo timer_stop();?>
            <br><?php if ($this->options->icpCode) { echo '<a href="https://beian.miit.gov.cn/" target="_blank" rel="external nofollow noopener">' . $this->options->icpCode . '</a>'; } else { get_themeCopyright(); } ?>
        </div>
        <!--
            尊重开源环境，请勿删除版权。
            此主题基于MDUI制作，由鼠子(ShuShuicu)开发；
            可前往主题作者博客：https://blog.miomoe.cn/免费下载。
        -->
    </footer>
</div>
</div>
        </div>
        <div class="mdui-fab-wrapper" mdui-fab="{trigger: 'hover'}">
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
<script src="<?php echo get_assetUrl('assets/js/miomoe-v3.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/mdui.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<script src="<?php echo get_assetUrl('assets/js/sweetalert2.all.min.js'); ?>?v=<?php echo get_ver(); ?>"></script>
<?php $this->footer(); ?>
<?php $this->options->jsStyleCode(); ?>
</body>
</html>