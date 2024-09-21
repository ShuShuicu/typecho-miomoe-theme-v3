<?php 
/**
 * 后台侧边栏设置
 * @package MioMoeV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

    // 侧边
    $tabCategorie = new Typecho_Widget_Helper_Form_Element_Select(  
        'tabCategorie',  
        array(        
            'true' => _t('折叠'), 
            'open'=> _t('展开'), 
        ),  
        'open',          
        _t('文章分类'),   
        _t('侧边栏文章分类是否展开') 
    );   
    $form->addInput($tabCategorie);

    $tabPage = new Typecho_Widget_Helper_Form_Element_Select(  
        'tabPage',  
        array(        
            'true' => _t('折叠'), 
            'open'=> _t('展开'), 
        ),  
        'true',          
        _t('独立页面'),   
        _t('侧边栏独立页面是否展开') 
    );   
    $form->addInput($tabPage);

    $tabArchiving = new Typecho_Widget_Helper_Form_Element_Select(  
        'tabArchiving',  
        array(        
            'true' => _t('折叠'), 
            'open'=> _t('展开'), 
        ),  
        'true',          
        _t('每月归档'),   
        _t('侧边栏每月归档是否展开') 
    );   
    $form->addInput($tabArchiving);

    // 侧边标题 
    $sidebarTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'sidebarTitle', 
        NULL, 
        NULL,
        _t('侧边标题'), 
        _t('请输入侧边标题，一般为网站或作者名称，留空则显示站点标题。')
    );
    $form->addInput($sidebarTitle);
    // 侧边副标题
    $sidebarSubTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'sidebarSubTitle', 
        NULL, 
        NULL,
        _t('侧边副标题'), 
        _t('请输入侧边副标题，一般为网站关键词或作者说明，留空则显示站点副标题。')
    );
    $form->addInput($sidebarSubTitle);
    // 侧边图片
    $sidebarImg = new Typecho_Widget_Helper_Form_Element_Text(
        'sidebarImg', 
        NULL, 
        NULL, 
        _t('侧边图片'), 
        _t('请输入侧边图片链接，一般为网站favicon或作者头像，留空则显示神鹰黑手哥。')
    );
    $form->addInput($sidebarImg);
    // 侧边介绍
    $sidebarInfo = new Typecho_Widget_Helper_Form_Element_Textarea(
        'sidebarInfo', 
        NULL, 
        NULL, 
        _t('侧边介绍'), 
        _t('请输入侧边介绍说明，一般为网站说明或作者介绍，留空则显示站点的Description。<font color="red">支持HTML代码。</font><hr>')
    );
    $form->addInput($sidebarInfo);