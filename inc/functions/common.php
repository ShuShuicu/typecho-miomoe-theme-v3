<?php 
/**
 * functions 代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

/**
 * 加载时间
 * Blog.MioMoe.Cn
 */
function timer_start() {
    global $timestart;
    $mtime     = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();
function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime     = explode( ' ', microtime() );
    $timeend   = $mtime[1] + $mtime[0];
    $timetotal = number_format( $timeend - $timestart, $precision );
    $r         = $timetotal < 1 ? $timetotal * 1000 . " ms" : $timetotal . " s";
    if ( $display ) {
        echo $r;
    }
    return $r;
}

/**
 * Swal2 提示框
 * Blog.MioMoe.Cn
 */
class ToastNotification
{
    public static function addToastScript($header, $widget)
    {
        $title = '';
        if ($widget->is('post')) { // 检查是否为文章页面
            $title = '文章：' . addslashes($widget->title);
        } elseif ($widget->is('category')) { // 检查是否为分类页面
            $title = '分类：' . addslashes($widget->getArchiveTitle());
        } elseif ($widget->is('tag')) { // 检查是否为标签页面
            $title = '标签：' . addslashes($widget->getArchiveTitle());
        } elseif ($widget->is('author')) { // 检查是否为作者页面
            $title = '作者：' . addslashes($widget->getArchiveTitle());
        } elseif ($widget->is('page')) { // 检查是否为单独页面
            $title = '页面：' . addslashes($widget->title);
        } else {
            return $header;
        }

        $script = <<<EOT
<script>
document.addEventListener("DOMContentLoaded", function() {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    Toast.fire({
        icon: "success",
        title: "$title"
    });
});
</script>
EOT;

        echo $script;
        return $header;
    }
}
// 注册挂钩
Typecho_Plugin::factory('Widget_Archive')->header = array('ToastNotification', 'addToastScript'); 