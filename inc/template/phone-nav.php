<?php
/**
 * 
 * 主题手机版导航
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>

<div class="mdui-hidden-md-up mdui-drawer mdui-color-24 mdui-drawer-close" id="phoneNav">
    <ul class="mdui-list">
        <a href="<?php $this->options->siteUrl(); ?>" mdui-tooltip="{content: '网站首页', position: 'bottom'}">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
                <div class="mdui-list-item-content">首页</div>
            </li>
        </a>
        <a href="<?php $this->options->siteUrl(); ?>feed/" mdui-tooltip="{content: '订阅博客', position: 'bottom'}">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">rss_feed</i>
                <div class="mdui-list-item-content">Reed</div>
            </li>
        </a>
        <li class="mdui-subheader">站点分类</li>
        
        <div class="mdui-list" mdui-collapse="{accordion: true}">
                <div class="mdui-collapse-item mdui-collapse-item-<?php $this->options->tabCategorie(); ?>">
                    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">apps</i>
                        <div class="mdui-list-item-content">文章分类</div>
                        <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_up</i>
                    </div>
                    <div class="mdui-collapse-item-body mdui-list">
                        <?php \Widget\Metas\Category\Rows::alloc()->to($cates); ?>
                        <?php while ($cates->next()): ?>
                        <a href="<?php echo $cates->permalink(); ?>" mdui-tooltip="{content: '查看分类', position: 'bottom'}" class="mdui-list-item mdui-ripple"><div class="mdui-list-item-content"><?php echo $cates->name(); ?></div> <div class="mdui-text-color-orange"><?php echo $cates->count(); ?></div></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

            <div class="mdui-list" mdui-collapse="{accordion: true}">
                <div class="mdui-collapse-item mdui-collapse-item-<?php $this->options->tabPage(); ?>">
                    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">library_books</i>
                        <div class="mdui-list-item-content">独立页面</div>
                        <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_up</i>
                    </div>
                    <div class="mdui-collapse-item-body mdui-list">
                        <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                        <?php while ($pages->next()): ?>
                        <a href="<?php $pages->permalink(); ?>" mdui-tooltip="{content: '查看页面', position: 'bottom'}">
                            <li class="mdui-list-item mdui-ripple">
                                <div class="mdui-list-item-content"><?php $pages->title(); ?></div>
                            </li>
                        </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

            <div class="mdui-list" mdui-collapse="{accordion: true}">
                <div class="mdui-collapse-item mdui-collapse-item-<?php $this->options->tabArchiving(); ?>">
                    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">access_time</i>
                        <div class="mdui-list-item-content">每月归档</div>
                        <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_up</i>
                    </div>
                    <div class="mdui-collapse-item-body mdui-list">
                        <?php $this->widget('Widget_Contents_Post_Date','type=month&format=Y年n月')->parse('
				<a href="{permalink}" class="mdui-list-item mdui-ripple">
					<div class="mdui-list-item-content">{date}</div>
					<div class="mdui-text-color-orange">{count}</div>
				</a>'); ?>
                    </div>
                </div>
            </div>

        <li class="mdui-subheader">站点统计</li>
        <div class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">library_books</i>
            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <div class="mdui-list-item-content">文章总数</div>
            <div><?php $stat->publishedPostsNum(); ?></div>
        </div>
        <li class="mdui-list-item" mdui-drawer-close="{target:'#main-drawer'}">
            <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-blue-grey">chevron_left</i>
            <div class="mdui-list-item-content">收起菜单</div>
        </li>
    </ul>
</div>