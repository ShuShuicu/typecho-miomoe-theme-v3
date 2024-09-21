<?php 
/**
 * 后台优化加速CDN设置
 * @package MioMoeV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

    // CDN
    $assetsCdn = new Typecho_Widget_Helper_Form_Element_Select(  
        'assetsCdn',  
        array(        
            'default' => _t('本地'), 
            'https://ss.bscstorage.com/wpteam-shushuicu/'=> _t('白山云'), 
        ),  
        'default',          
        _t('CDN'),   
        _t('请选择静态资源CDN加速节点<br><font color="red">推荐白山云</font>，如果切换CDN后有问题请切换为本地。') 
    );   
    $form->addInput($assetsCdn);
    