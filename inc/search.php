<?php
/**
 * 主题搜索页面
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2 mdui-typo mdui-card mdui-card-content mdui-hoverable" style="border-radius: 8px;">
    <div class="mdui-card-media mdui-card-content">
        <div class="mdui-card-primary-title mdui-text-truncate">
            <?php $this->archiveTitle([
                'search'   => _t('包含关键字 %s 的文章'),
            ], '',); ?>
        </div>
        <div class="mdui-divider"></div>
    </div>
    <div class="mdui-card-actions mdui-textfield">
        <form method="post">
            <i class="mdui-icon material-icons">search</i>
            <input class="mdui-textfield-input" type="text" name="s" class="text" placeholder="输入关键词按Enter(回车)搜索" value="<?php echo $this->_keywords ?>" />
        </form>
    </div>
</div>

<div class="mdui-m-y-2 mdui-card mdui-card-content mdui-hoverable" style="border-radius: 8px;">

<ul class="mdui-list">
<?php while($this->next()): ?>
    <a target="_blank" href="<?php $this->permalink() ?>" mdui-tooltip="{content: '阅读本文'}">
        <li class="mdui-list-item mdui-ripple">
            <div class="mdui-list-item-content">
                <div class="mdui-list-item-title"><?php $this->title() ?></div>
                <div class="mdui-list-item-text mdui-list-item-one-line">
                    <span class="mdui-text-color-theme-text"><?php $this->excerpt(); ?></span>
                </div>
            </div>
        </li>
    </a>
<div class="mdui-divider"></div>
<?php endwhile; ?>
</ul>

</div>