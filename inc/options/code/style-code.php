<?php 
/**
 * 后台自定义代码设置
 * @package MioMoeV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

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
    