<?php 
/**
 * 主题信息面板
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2 typo mdui-card mdui-hoverable mdui-card-content" style="border-radius: 8px;">
<div class="mdui-card-primary-title mdui-text-truncate">
<?php
$string = ''; 

$string .= '
感谢使用MioV3！
<a href="https://gitee.com/ShuShuicu/typecho-miomoe-theme-v3" class="mdui-float-right mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white">
<i class="mdui-icon material-icons">stars</i>
</a>
<br><small>
<div class="mdui-divider"></div>
当前版本：' . get_ver() . '丨最新版本：' . get_apiNewVer() . '
<a href="https://gitee.com/ShuShuicu/typecho-miomoe-theme-v3/releases" target="_blank" class="mdui-float-right mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white">
<i class="mdui-icon material-icons">file_download</i>
</a>
</small>


';

$string .= '
</div>
</div>'; 

echo $string;