<?php 
/**
 * 主题备份功能
 * @package MioV3
 * @作者 鼠子(ShuShuicu)
 * @链接 https://blog.miomoe.cn/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit; 

?>
<div class="mdui-m-y-2 mdui-card mdui-hoverable mdui-card-content" id="backups" style="border-radius: 8px;">
    <div class="mdui-card-primary-title">
<?php
// 获取当前主题名称
$themeName = Helper::options()->theme;

// 数据库连接
$db = Typecho_Db::get();

// 获取当前主题的设置
$currentThemeOptions = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:' . $themeName));

// 定义备份设置的名称
$backupName = 'theme:' . $themeName . 'bf';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['type'])) { 
    $action = $_POST['type'];

    if ($action === "备份模板设置数据") {
        if ($currentThemeOptions) {
            // 检查是否已经存在备份
            $existingBackup = $db->fetchRow($db->select()->from('table.options')->where('name = ?', $backupName));
            if ($existingBackup) {
                // 更新现有备份
                $update = $db->update('table.options')
                    ->rows(['value' => $currentThemeOptions['value']])
                    ->where('name = ?', $backupName);
                $db->query($update);
                $message = '备份已更新，请等待自动刷新！如果等不到请点击 <a href="' . Helper::options()->adminUrl('options-theme.php') . '">这里</a>。';
            } else {
                // 创建新的备份
                $insert = $db->insert('table.options')
                    ->rows(['name' => $backupName, 'user' => '0', 'value' => $currentThemeOptions['value']]);
                $db->query($insert);
                $message = '备份完成，请等待自动刷新！如果等不到请点击 <a href="' . Helper::options()->adminUrl('options-theme.php') . '">这里</a>。';
            }
            // 显示消息并设置自动刷新
            echo '<div class="tongzhi col-mb-12 home">' . $message . '</div>';
            echo '<script>setTimeout(function(){ window.location.href = "' . Helper::options()->adminUrl('options-theme.php') . '"; }, 2500);</script>';
        } else {
            echo '<div class="tongzhi col-mb-12 home">当前主题没有设置数据可备份。</div>';
        }
    } elseif ($action === "还原模板设置数据") {
        // 还原备份
        $backupOptions = $db->fetchRow($db->select()->from('table.options')->where('name = ?', $backupName));
        if ($backupOptions) {
            // 更新当前主题设置为备份内容
            $update = $db->update('table.options')
                ->rows(['value' => $backupOptions['value']])
                ->where('name = ?', 'theme:' . $themeName);
            $db->query($update);
            $message = '检测到备份数据，恢复完成，请等待自动刷新！如果等不到请点击 <a href="' . Helper::options()->adminUrl('options-theme.php') . '">这里</a>。';
            echo '<div class="tongzhi col-mb-12 home">' . $message . '</div>';
            echo '<script>setTimeout(function(){ window.location.href = "' . Helper::options()->adminUrl('options-theme.php') . '"; }, 5000);</script>';
        } else {
            echo '<div class="tongzhi col-mb-12 home">没有备份数据，无法恢复！</div>';
        }
    } elseif ($action === "删除备份数据") {
        // 删除备份
        $backupOptions = $db->fetchRow($db->select()->from('table.options')->where('name = ?', $backupName));
        if ($backupOptions) {
            $delete = $db->delete('table.options')->where('name = ?', $backupName);
            $db->query($delete);
            $message = '删除成功，请等待自动刷新，如果等不到请点击 <a href="' . Helper::options()->adminUrl('options-theme.php') . '">这里</a>。';
            echo '<div class="tongzhi col-mb-12 home">' . $message . '</div>';
            echo '<script>setTimeout(function(){ window.location.href = "' . Helper::options()->adminUrl('options-theme.php') . '"; }, 5000);</script>';
        } else {
            echo '<div class="tongzhi col-mb-12 home">备份不存在，无需删除！</div>';
        }
    }
}

// 输出操作表单
echo '<form class="protected home col-mb-12" action="" method="post">
    <input type="submit" name="type" class="btn btn-s" value="备份模板设置数据" />  
    <input type="submit" name="type" class="btn btn-s" value="还原模板设置数据" />  
    <input type="submit" name="type" class="btn btn-s" value="删除备份数据" />
</form>';
?>
    </div>
</div>
