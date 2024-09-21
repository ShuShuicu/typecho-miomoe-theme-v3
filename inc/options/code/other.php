<?php 
/**
 * 后台其他页面设置
 * @package MioMoeV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

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
    // 友情链接内容
    $linksContent = new Typecho_Widget_Helper_Form_Element_Textarea(
        'linksContent',
        NULL,
        '',
        _t('友情链接内容'),
        _t('友情链接的链接内容，推荐使用MDUI的链接组件<a href="https://www.mdui.org/docs/list">https://www.mdui.org/docs/list</a><hr>')
    );
    $form->addInput($linksContent);