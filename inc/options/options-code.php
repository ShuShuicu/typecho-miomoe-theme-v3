<?php 
/**
 * 后台设置页面代码
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

    // 备案号
    $icpCode = new Typecho_Widget_Helper_Form_Element_Text(
        'icpCode', 
        NULL, 
        NULL,
        _t('ICP备案号'), 
        _t('请输入网站ICP备案号，如果没有请留空。')
    );
    $form->addInput($icpCode);

    // 版权声明
    $postCopyright = new Typecho_Widget_Helper_Form_Element_Textarea(
        'postCopyright',
        NULL,
        '<mark>本站文章大部分始于原创，用于个人学习记录，可能对您有所帮助，仅供参考！</mark>',
        _t('版权声明'),
        _t('文章底部版权声明，支持HTML代码。')
    );
    $form->addInput($postCopyright);

    // 友情链接
    $linksInfo = new Typecho_Widget_Helper_Form_Element_Textarea(
        'linksInfo',
        NULL,
        '<ol>
        <li>排名不分先后。</li>
        <li>网站修改友链信息请重新提交留言即可。</li>
        <li>若发现站点无法访问，将会在一个月后删除。</li>
        <li>网站正常访问但是无故下掉链接的，会删除友链。</li>
        <li>如果不符合要求会无视掉申请，<font color="red">一天内都会通过。</font></li>
    </ol>',
        _t('申请友链说明'),
        _t('友情链接申请说明，支持HTML代码。')
    );
    $form->addInput($linksInfo);

    // 自定义代码
    // 自定义css代码
    $cssStyleCode = new Typecho_Widget_Helper_Form_Element_Textarea(
        'cssStyleCode',
        NULL,
        '<style>
        body {
        font-weight:500;
        background: url(' . THEME_URL . '/assets/images/background.webp) 
        no-repeat 0 0;
        background-size: cover;
        background-attachment: fixed;
        }
    </style>',
        _t('自定义CSS代码'),
        _t('位于 head 标签之前(顶部)，<font color="red">需要在 style 标签内填写css代码。</font>')
    );
    $form->addInput($cssStyleCode);
    // 自定义js代码
    $jsStyleCode = new Typecho_Widget_Helper_Form_Element_Textarea(
        'jsStyleCode',
        NULL,
        NULL,
        _t('自定义JS代码'),
        _t('位于 body 标签之前(底部)，<font color="red">需要在 script 标签内填写JavaScript代码。</font>')
    );
    $form->addInput($jsStyleCode);
    