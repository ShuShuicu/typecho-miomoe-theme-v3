<?php
/**
 * 
 * 主题友情链接页面
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-5 mdui-center">
<div class="mdui-card mdui-hoverable" style="border-radius: 8px">
    <div class="mdui-card-media mdui-card-content">
        <div class="mdui-card-primary-title mdui-text-truncate"><?php $this->title() ?></div>
        <div class="mdui-divider"></div>
        <div class="mdui-card-actions">
            <div class="mdui-tab mdui-tab-full-width" mdui-tab>
                <a href="#友情链接" class="mdui-ripple">
                    <i class="mdui-icon material-icons">insert_link</i>
                    <label>友情链接</label>
                </a>
                <a href="#申请友链" class="mdui-ripple">
                    <i class="mdui-icon material-icons">format_list_bulleted</i>
                    <label>申请友链</label>
                </a>
            </div>
        </div>
        <div class="mdui-divider"></div>
    </div>
        <div class="mdui-card-content post-container" id="友情链接" style="padding-left:4%;padding-right:4%;">
            <?php echo $this->options->linksContent; ?>
        </div>
        <div class="mdui-card-content post-container" id="申请友链" style="padding-left:4%;padding-right:4%;">
            <?php require_once 'links-comments.php'; ?>
        <div class="mdui-table-fluid">
    <table class="mdui-table mdui-table-hoverable mdui-typo">
        <thead>
            <tr>
                <th>#</th>
                <th>本站基本信息 · <small>申请前请确保已将本站链接添加至贵站。</small></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>名称</td>
                <td><?php $this->options->title(); ?></td>
            </tr>
            <tr>
                <td>地址</td>
                <td><a href="<?php $this->options->siteUrl(); ?>" target="_blank"><?php $this->options->siteUrl(); ?></a></td>
            </tr>
            <tr>
                <td>图标</td>
                <td><a href="<?php echo $this->options->faviconUrl ? $this->options->faviconUrl : $this->options->themeUrl . '/assets/images/favicon.ico'; ?>" target="_blank"><?php echo $this->options->faviconUrl ? $this->options->faviconUrl : $this->options->themeUrl . '/assets/images/favicon.ico'; ?></a></td>
            </tr>
            <tr>
                <td>描述</td>
                <td><?php echo $this->options->description; ?></td>
            </tr>
            <tr>
                <td>申请说明</td>
                <td><?php echo $this->options->linksInfo ? $this->options->linksInfo : $this->options->linksInfo . '暂无'; ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
</div>
</div>