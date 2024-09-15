<?php
/**
 * 侧边栏随机文章
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2 mdui-card mdui-hoverable" style="border-radius: 8px;">
    <div class="mdui-card-media mdui-card-content">
        <div class="mdui-tab mdui-tab-full-width" mdui-tab>
            <a href="#分类归档" class="mdui-ripple">分类归档</a>
            <a href="#随机文章" class="mdui-ripple">随机文章</a>
        </div>
        <div class="mdui-divider"></div>

        <div id="分类归档">

            <div class="mdui-list">
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
            </div>
            <div class="mdui-divider"></div>
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
                        <a href="<?php echo $cates->permalink(); ?>" mdui-tooltip="{content: '查看分类', position: 'bottom'}" class="mdui-list-item mdui-ripple"><?php echo $cates->name(); ?> (<?php echo $cates->count(); ?>)</a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="mdui-divider"></div>
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
            <div class="mdui-divider"></div>
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
					<div class="mdui-text-color-blue-900">{count}</div>
				</a>'); ?>
                    </div>
                </div>
            </div>

        </div>

        <div id="随机文章">
            <?php 
                $mid='';//此参数为空时为随机文章，为分类mid时则为当前分类下的随机文章
                $cid=0;//此参数填写当前文章的cid即可在随机文章时不输出当前文章
                $size=5;//随机输出文章的数量
                $this->widget('Widget_Post_tongleisuiji@suiji', 'mid='.$mid.'&pageSize='.$size.'&cid='.$cid)->to($to);
                // $to->excerpt(150, '...');
            ?>
            <div class="mdui-list">
                <?php if($to->have()): ?>
                <?php while($to->next()): ?>
                <a href="<?php $to->permalink() ?>" class="mdui-list-item mdui-ripple mdui-text-truncate" mdui-tooltip="{content: '<?php $to->excerpt(); ?>'}"><?php $to->title(); ?></a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>