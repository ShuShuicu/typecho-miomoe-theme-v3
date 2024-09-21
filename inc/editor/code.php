<?php 
/**
 * 短代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

// 添加一个钩子函数
function add_custom_message_to_write_page() {
    // 只在后台的发文章页面和发页面页面显示
    $request = Typecho_Request::getInstance();
    if (in_array($request->getRequestUri(), ['/admin/write-post.php', '/admin/write-page.php'])) {
        echo '<script>
            window.onload = function() {
                var optionTabs = document.querySelector(".typecho-option-tabs");
                if (optionTabs) {
                    var customMessage = document.createElement("p");
                    customMessage.textContent = "文章短代码使用文档：https://blog.miomoe.cn/docs/MioMoe-doc.html";
                    optionTabs.parentNode.insertBefore(customMessage, optionTabs.nextSibling);
                }
            }
        </script>';
    }
}
// 挂载到 admin/footer.php 底部
Typecho_Plugin::factory('admin/footer.php')->end = 'add_custom_message_to_write_page';


// 短代码解析函数
// 按钮
function parse_button_shortcode($content) {
    $pattern = '/\[button link="(.*?)"\](.*?)\[\/button\]/i';
    $callback = function ($matches) {
        $link = htmlspecialchars($matches[1], ENT_QUOTES, 'UTF-8');
        $text = htmlspecialchars($matches[2], ENT_QUOTES, 'UTF-8');
        return '<a target="_blank" href="' . $link . '"><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" style="border-radius: 5px"><b>' . $text . '</b></button></a>';
    };
    return preg_replace_callback($pattern, $callback, $content);
}

function add_shortcode_support($content) {
    $content = htmlspecialchars_decode($content); // 先解码HTML实体
    $content = parse_button_shortcode($content);
    return $content;
}
// 为文章内容和摘要添加过滤器
Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = 'add_shortcode_support';
Typecho_Plugin::factory('Widget_Abstract_Contents')->excerptEx = 'add_shortcode_support';
