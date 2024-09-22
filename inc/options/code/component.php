<?php 
/**
 * 后台设置页面代码
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
class Castle_Component
{
    
    // 备份设置
    public function themeBackups() 
    {
        require_once 'require/backups.php'; 
    }

    // 信息面板
    public function themeInfo()
    {
        require_once 'require/info.php'; 
    }

    // Api信息
    public function themeApiInfo()
    {
        echo get_apiInfo(); 
        echo '<hr>'; 
    }
    // 常规设置
    public function themeOptionsRoutine($form) 
    {
        require_once 'require/routine.php'; 
    }
}