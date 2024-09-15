<?php 
/**
 * 404页面
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
header("HTTP/1.1 404 Not Found");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - 页面未找到</title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/404.css'); ?>?v=<?php get_ver(); ?>">
</head>
<body>
    <script>
    var i = 5;  
    var intervalid;
    intervalid = setInterval("cutdown()", 1000);
    function cutdown() {
        if (i == 0) {
            window.location.href = "<?php $this->options->siteUrl(); ?>?error=404"; 
            clearInterval(intervalid);
        }
        document.getElementById("mes").innerHTML = i;
        i--;
    }
    window.onload = cutdown;
    </script>
    <span class="face">:(</span>
    <p>您访问的页面没有找到。<br>
        <span id="mes"></span> 秒后转至网站首页；<br>
    <p class="paddingbox">或者在倒计时结束前点击以下链接继续浏览网页</p>
    <p>》<a style="cursor:pointer" onclick="history.back()">返回上一页面</a></p>
        <span class="tips">如果您想了解更多信息，则可以稍后在线搜索此错误: 算了你还是别搜了……</span>
    </p>
</body>
</html>