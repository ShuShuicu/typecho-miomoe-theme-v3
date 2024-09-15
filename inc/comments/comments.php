<?php 
/**
 * 评论文件
 * @package MioV3
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<div class="mdui-m-y-2">
    <div class="mdui-card mdui-hoverable" style="border-radius: 8px">
        <div class="mdui-card-content">
            <div class="mdui-card-primary-title mdui-text-truncate">
                <i class="mdui-icon material-icons">comment</i>
                <?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?>
            </div>
            <div class="mdui-divider"></div>
            <div class="mdui-tab mdui-tab-centered mdui-tab-full-width" mdui-tab>
                <a href="#所有评论" class="mdui-ripple">所有评论</a>
                <a href="#发表评论" class="mdui-ripple">发表评论</a>
            </div>
            <div class="mdui-divider"></div>
            <div id="所有评论"><?php require_once 'list.php'; ?></div>
            <div id="发表评论"><?php require_once 'form.php'; ?></div>
        </div>
    </div>
</div>