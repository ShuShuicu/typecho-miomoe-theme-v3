<?php
/**
 * 顶部文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<!DOCTYPE html>
<html lang="zh-CN">
<!--
     __  __ _   __      ______    _______ _                           _ 
    |  \/  (_)  \ \    / /___ \  |__   __| |                         | |
    | \  / |_  __\ \  / /  __) |    | |  | |__   ___ _ __ ___   ___  | |
    | |\/| | |/ _ \ \/ /  |__ <     | |  | '_ \ / _ \ '_ ` _ \ / _ \ | |
    | |  | | | (_) \  /   ___) |    | |  | | | |  __/ | | | | |  __/ |_|
    |_|  |_|_|\___/ \/   |____/     |_|  |_| |_|\___|_| |_| |_|\___| (_)
                                                                        
        Gitee：https://gitee.com/ShuShuicu/typecho-miomoe-theme-v3    
        GitHub：https://github.com/ShuShuicu/typecho-miomoe-theme-v3  
-->
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="//ss.bscstorage.com" />
    <link rel="dns-prefetch" href="//cdn.staticfile.org" />
    <link rel="dns-prefetch" href="//cdn.jsdmirror.com" />
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php $this->archiveTitle(array( 
	    'category' => _t('「%s」分类'), 
        'search'   => _t('搜索结果'), 
        'tag'      => _t('「%s」标签'), 
        'author'   => _t('「%s」发布的文章') 
	), '', ' - '); ?><?php if ($this->_currentPage > 1) echo '「第' . $this->_currentPage . '页」 - '; ?><?php $this->options->title(); ?><?php if ($this->is('index') && !empty($this->options->subTitle)): ?> - <?php $this->options->subTitle(); ?><?php endif; ?></title>
    <?php $this->header(); ?>
    <link href="<?php echo $this->options->faviconUrl ? $this->options->faviconUrl : $this->options->themeUrl . '/assets/images/favicon.ico'; ?>" rel="icon" />
    <link rel="stylesheet" href="<?php echo get_assetUrl('assets/css/miomoe-v3.css'); ?>?v=<?php echo get_ver(); ?>" />
    <link rel="stylesheet" href="<?php echo get_assetUrl('assets/css/mdui.min.css'); ?>?v=<?php echo get_ver(); ?>" />
    <link rel="stylesheet" href="<?php echo get_assetUrl('assets/css/sweetalert2.min.css'); ?>?v=<?php echo get_ver(); ?>" />
    <link rel="stylesheet" href="<?php echo get_assetUrl('assets/code/styles/' . $this->options->CodePrettifyCSS . '.css'); ?>?v=<?php echo get_ver(); ?>" />
    <link rel="stylesheet" href="<?php echo get_assetUrl('assets/css/nprogress.min.css'); ?>?v=<?php echo get_ver(); ?>" />
    <?php $this->options->cssStyleCode(); ?>
</head>
<body class="mdui-appbar-with-toolbar mdui-theme-auto mdui-theme-layout-auto mdui-theme-primary-<?php echo $this->options->themePrimary ? $this->options->themePrimary : $this->options->themePrimary . 'blue-grey'; ?> mdui-theme-accent-<?php echo $this->options->accentPrimary ? $this->options->accentPrimary : $this->options->accentPrimary . 'indigo'; ?> mdui-loaded" id="top">
    <div class="app">
        <header class="appbar mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide">
            <div class="mdui-toolbar mdui-color-theme">

                <a href="<?php $this->options->siteUrl(); ?>?random=true" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white"  mdui-tooltip="{content: '随机文章'}">
                    <i class="mdui-icon material-icons">book</i>
                </a>
                
                <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-headline mdui-hidden-xs"><?php $this->options->title(); ?></a>
                <a class="router-link-active router-link-exact-active mdui-typo-title mdui-col-xs-6">
        <?php 
            if (empty($this->getArchiveTitle())) {
            echo _t('「首页」');
        } else {
            $this->archiveTitle(array(
                'post' => _t('文章详情'),
                'page' => _t('页面详情'),
                'category' => _t('分类页面'),
                'search'   => _t('搜索结果'),
                'tag'      => _t('标签页面'),
                'author'   => _t('作者页面')
            ), '「', '」');
        }
        ?>
                </a>
                <div class="mdui-toolbar-spacer"></div>
                <a id="search" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content:'文章搜索'}">
                    <i class="mdui-icon material-icons">search</i>
                </a>
                <a id="toggleTheme" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content:'切换主题'}">
                    <i class="mdui-icon material-icons">brightness_6</i>
                </a>
                <a class="mdui-hidden-md-up mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '导航'}" mdui-drawer="{target: '#phoneNav'}">
                    <i class="mdui-icon material-icons">menu</i>
                </a>
            </div>
        </header>
            <?php require_once 'phone-nav.php'; ?>
    <div class="mdui-container" id="content">
        