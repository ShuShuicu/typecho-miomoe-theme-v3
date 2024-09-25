<?php 
/**
 * 主题常规设置
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

    // favicon
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'faviconUrl',
        NULL,
        '' . THEME_URL . '/assets/images/favicon.ico',
        _t('网站图标'),
        _t('请填入网站图标，没有则显示主题默认图标。')
    );
    $form->addInput($faviconUrl);

    // 副标题 
    $subTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'subTitle', 
        NULL, 
        '由 MioV3 主题强力驱动', 
        _t('副标题'), 
        _t('输入一段描述，将会显示在网站首页 title 后方，留空不显示。')
    );
    $form->addInput($subTitle);

    // 作者头像
    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'avatarUrl',
        NULL,
        '' . THEME_URL . '/assets/images/avatar.jpg',
        _t('作者头像'),
        _t('请填入作者头像链接，没有则显示神鹰黑手哥。')
    );
    $form->addInput($avatarUrl);
    // 文章底部作者说明
    $postEndAuthorInfo = new Typecho_Widget_Helper_Form_Element_Text(
        'postEndAuthorInfo', 
        NULL, 
        '做个小网站，搞点小意思。', 
        _t('文章底部作者介绍'), 
        _t('输入文章底部作者介绍说明。')
    );
    $form->addInput($postEndAuthorInfo);

    // QQ
    $qqUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'qqUrl', 
        NULL, 
        'https://wpa.qq.com/msgrd?v=3&uin=QQ号码&site=qqq&menu=yes', 
        _t('QQ链接'), 
        _t('输入QQ加好友或加群链接，将会在网站底部显示的QQ图标点击跳转。')
    );
    $form->addInput($qqUrl);
    // 邮箱
    $Email = new Typecho_Widget_Helper_Form_Element_Text(
        'Email', 
        NULL, 
        '123456789@qq.com', 
        _t('E-Mail'), 
        _t('输入收件邮箱，将会在网站底部显示的EMail图标点击发邮件。')
    );
    $form->addInput($Email);
    // 哔哩哔哩 
    $bilibiliUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'bilibiliUrl', 
        NULL, 
        'https://space.bilibili.com/435502585', 
        _t('B站空间'), 
        _t('输入B站个人空间链接，将会在网站底部显示的B站图标点击跳转。')
    );
    $form->addInput($bilibiliUrl);

    // 打赏
    // 微信
    $rewardPayImg = new Typecho_Widget_Helper_Form_Element_Text(
        'rewardPayImg',
        NULL,
        '' . THEME_URL . '/assets/images/wechat-pay.jpg',
        _t('收款码'),
        _t('请填入收款打赏码链接。')
    );
    $form->addInput($rewardPayImg);

    // 备案号
    $icpCode = new Typecho_Widget_Helper_Form_Element_Text(
        'icpCode', 
        NULL, 
        NULL,
        _t('ICP备案号'), 
        _t('请输入网站ICP备案号，如果没有请留空。<hr>')
    );
    $form->addInput($icpCode);

    // CDN
    $assetsCdn = new Typecho_Widget_Helper_Form_Element_Select(  
        'assetsCdn',  
        array(        
            'default' => _t('本地'), 
            'https://ss.bscstorage.com/wpteam-shushuicu/'=> _t('⭐️白山云⭐️'), 
            'https://cdn.jsdmirror.com/gh/ShuShuicu/typecho-miomoe-theme-v3@master/'=> _t('⭐️JsdMirror⭐️'), 
            'https://cdn.jsdelivr.net/gh/ShuShuicu/typecho-miomoe-theme-v3@master/'=> _t('JsDelivr(官方源'), 
            // 'https://jsdelivr.shushu.icu/gh/ShuShuicu/typecho-miomoe-theme-v3@master/'=> _t('JsDelivr(鼠子源'), 
            'https://jsd.nmmsl.top/gh/ShuShuicu/typecho-miomoe-theme-v3@master/'=> _t('JsDelivr(荣6源'), 
            'https://jsd.vxo.im/gh/ShuShuicu/typecho-miomoe-theme-v3@master/'=> _t('JsDelivr(Yize源'), 
        ),  
        'default',          
        _t('CDN'),   
        _t('请选择静态资源CDN加速节点<br><font color="red">推荐白山云&JsdMirror</font>，如果切换CDN后有问题请切换为本地。') 
    );   
    $form->addInput($assetsCdn);
    // Avatar
    $avatarCdn = new Typecho_Widget_Helper_Form_Element_Select(  
        'avatarCdn',  
        array(        
            'https://cravatar.cn/avatar/' => _t('CrAvatar'), 
            'https://weavatar.com/avatar/'=> _t('WeAvatar'), 
            'http://www.gravatar.com/avatar/'=> _t('GrAvatar'),
            'https://gravatar.shushu.icu/avatar/'=> _t('GrAvatar(代理节点)'), 
        ),  
        'https://cravatar.cn/avatar/',          
        _t('Avatar'),   
        _t('请选择Avatar源，用于评论头像展示。') 
    );   
    $form->addInput($avatarCdn);
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
        'red',          
        _t('副(强)色调'),   
        _t('请选择主题的副(强)色调。') 
    );   
    $form->addInput($accentPrimary);

    // 高亮代码
    $CodePrettifyCSS = new Typecho_Widget_Helper_Form_Element_Select(  
        'CodePrettifyCSS',  
        array(    
            'coy'=> _t('Coy'),
            'dark'=> _t('Dark'),    
            'GrayMac' => _t('⭐️Mac(灰)⭐️'), 
            'BlackMac'=> _t('⭐️Mac(黑)⭐️'), 
            'WhiteMac'=> _t('⭐️Mac(白)⭐️'), 
            'twilight'=> _t('Twilight'),
            'tomorrow-night'=> _t('TomorrowNight'),
        ),  
        'GrayMac',          
        _t('高亮代码'),   
        _t('请选择文章高亮主题风格。') 
    );   
    $form->addInput($CodePrettifyCSS);
    
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

    // Drive目录
    $driveDir = new Typecho_Widget_Helper_Form_Element_Text(
        'driveDir', 
        NULL, 
        'files', 
        _t('MioDrive'), 
        _t('Drive功能文件目录，默认为 主题目录/inc/drive/ 下的 files 文件夹。<hr>')
    );
    $form->addInput($driveDir);
    
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

    // 侧边介绍
    $sidebarInfo = new Typecho_Widget_Helper_Form_Element_Textarea(
        'sidebarInfo', 
        NULL, 
        '' . Helper::options()->description . '', 
        _t('侧边介绍'), 
        _t('请输入侧边顶部介绍说明，一般为网站说明或作者介绍，留空则显示站点的Description。<font color="red">支持HTML代码。</font>')
    );
    $form->addInput($sidebarInfo);
    // 侧边自定义代码
    $sidebarStyleCode = new Typecho_Widget_Helper_Form_Element_Textarea(
        'sidebarStyleCode', 
        NULL, 
        NULL, 
        _t('侧边自定义HTML'), 
        _t('请输入侧边底部自定义<font color="red">HTML代码。</font>，一般为说明介绍播放器友情链接等，留空则不显示<<hr>')
    );
    $form->addInput($sidebarStyleCode);

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
    // 友情链接内容
    $linksContent = new Typecho_Widget_Helper_Form_Element_Textarea(
        'linksContent',
        NULL,
        '',
        _t('友情链接内容'),
        _t('友情链接的链接内容，推荐使用MDUI的链接组件<a href="https://www.mdui.org/docs/list">https://www.mdui.org/docs/list</a><hr>')
    );
    $form->addInput($linksContent);

    
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
    