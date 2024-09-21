<?php 
/**
 * 后台基础设置
 * @package MioMoeV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

    // 色调
    $themePrimary = new Typecho_Widget_Helper_Form_Element_Select(  
        'themePrimary',  
        array(        
            'blue-grey' => _t('蓝绿色'), 
            'indigo'=> _t('靛蓝色'), 
            'light-blue'=> _t('浅蓝色'), 
            'orange'=> _t('橙色'), 
            'purple'=> _t('紫色'), 
            'red'=> _t('红色'), 
        ),  
        'blue-grey',          
        _t('主色调'),   
        _t('请选择主题的主色调。') 
    );   
    $form->addInput($themePrimary);
    $accentPrimary = new Typecho_Widget_Helper_Form_Element_Select(  
        'accentPrimary',  
        array(        
            'indigo' => _t('靛蓝色'), 
            'pink'=> _t('粉红色'), 
            'deep-orange'=> _t('深橙色'),
            'deep-purple'=> _t('深紫色'),
            'red'=> _t('红色'),
        ),  
        'deep-orang',          
        _t('副(强)色调'),   
        _t('请选择主题的副(强)色调。') 
    );   
    $form->addInput($accentPrimary);
    
    // 列表调整 
    // 首页
    $indexStyle = new Typecho_Widget_Helper_Form_Element_Select(  
        'indexStyle',  
        array(        
            'default' => _t('默认风格'), 
            'picture'=> _t('图文风格'), 
        ),  
        'default',          
        _t('首页风格'),   
        _t('请选择首页风格') 
    );   
    $form->addInput($indexStyle);
    // 文章
    $postStyle = new Typecho_Widget_Helper_Form_Element_Select(  
        'postStyle',  
        array(        
            'default' => _t('默认风格'), 
            'picture'=> _t('顶图风格'), 
        ),  
        'default',          
        _t('文章风格'),   
        _t('请选择文章风格<hr>') 
    );   
    $form->addInput($postStyle);

    // favicon
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'faviconUrl',
        NULL,
        NULL,
        _t('网站图标'),
        _t('请填入网站图标，没有则显示主题默认图标。')
    );
    $form->addInput($faviconUrl);

    // 作者头像
    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'avatarUrl',
        NULL,
        NULL,
        _t('作者头像'),
        _t('请填入作者头像链接，没有则显示神鹰黑手哥。')
    );
    $form->addInput($avatarUrl);

    // 副标题 
    $subTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'subTitle', 
        NULL, 
        '由 MioV3 主题强力驱动', 
        _t('副标题'), 
        _t('输入一段描述，将会显示在网站首页 title 后方，留空不显示。<hr>')
    );
    $form->addInput($subTitle);