//** 2024 MioMoe! Copyright By ShuShuicu */
console.log("\n%c %s %c %s %c %s\n", "color: #fff; background: #34495e; padding:5px 0;", "Theme: MioV3", "background: #fadfa3; padding:5px 0;", "https://blog.miomoe.cn", "color: #fff;background: #d6293e; padding:5px 0;", "B站@ShuShuicu");

// 等待页面内容完全加载后执行
document.addEventListener('DOMContentLoaded', function() {
    // 初始化ViewImage
    if (window.ViewImage) {
        ViewImage.init('.mdui-card img, .mdui-hoverable img'); // 修改选择器确保匹配图片
    }

    // 为所有图片添加类名
    var images = document.getElementsByTagName('img');
    for (var i = 0; i < images.length; i++) {
        images[i].classList.add('mdui-ripple', 'mdui-img-fluid', 'mdui-img-rounded');
    }
});


// 视频类名 
var images = document.getElementsByTagName('video');
for (var i = 0; i < images.length; i++) {
    images[i].classList.add('mdui-video-container', 'mdui-video-fluid');
}

// 搜索弹窗
// 封装搜索弹窗函数
function showSearchPopup() {
    Swal.fire({
        title: '搜索',
        input: 'text',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: '前往搜索',
        showLoaderOnConfirm: true,
        preConfirm: (query) => {
            if (!query) {
                Swal.showValidationMessage('请输入搜索关键词');
            }
            return query;
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
        if (result.isConfirmed) {
            const searchQuery = encodeURIComponent(result.value);
            const searchUrl = `${window.location.origin}/?s=$
{searchQuery}`;
            window.location.href = searchUrl;
        }
    });
}

// 为search元素和searchFooter元素添加事件监听器
document.getElementById('search').addEventListener('click', function (e) {
    e.preventDefault(); // 阻止默认的链接点击行为
    showSearchPopup();
});

document.getElementById('searchFooter').addEventListener('click', function (e) {
    e.preventDefault(); // 阻止默认的链接点击行为
    showSearchPopup();
});


// 主题样式
// 切换主题并保存
// 主题切换函数
function toggleThemeFunction() {
    var body = document.body;
    var currentTheme = body.classList.contains('mdui-theme-layout-light') ? 'mdui-theme-layout-light' :
        body.classList.contains('mdui-theme-layout-dark') ? 'mdui-theme-layout-dark' :
            'mdui-theme-layout-auto';

    // 切换到下一个主题
    switch (currentTheme) {
        case 'mdui-theme-layout-auto':
            body.classList.replace('mdui-theme-layout-auto', 'mdui-theme-layout-light');
            localStorage.setItem('theme', 'mdui-theme-layout-light');
            mdui.snackbar({
                message: '当前为：浅色模式',
                position: 'left-bottom',
            });
            break;
        case 'mdui-theme-layout-light':
            body.classList.replace('mdui-theme-layout-light', 'mdui-theme-layout-dark');
            localStorage.setItem('theme', 'mdui-theme-layout-dark');
            mdui.snackbar({
                message: '当前为：深色模式',
                position: 'left-bottom',
            });
            break;
        case 'mdui-theme-layout-dark':
            body.classList.replace('mdui-theme-layout-dark', 'mdui-theme-layout-auto');
            localStorage.setItem('theme', 'mdui-theme-layout-auto');
            mdui.snackbar({
                message: '当前为：自动模式',
                position: 'left-bottom',
            });
            break;
    }
}

// 为toggleTheme和toggleThemeFooter元素添加事件监听器
document.getElementById('toggleTheme').addEventListener('click', toggleThemeFunction);
document.getElementById('toggleThemeFooter').addEventListener('click', toggleThemeFunction); // 新增的部分

// 加载主题设置
document.addEventListener('DOMContentLoaded', function () {
    var body = document.body;
    var savedTheme = localStorage.getItem('theme');

    if (savedTheme) {
        // 用保存的主题类替换可能存在的主题类
        body.classList.replace('mdui-theme-layout-light', savedTheme);
        body.classList.replace('mdui-theme-layout-dark', savedTheme);
        body.classList.replace('mdui-theme-layout-auto', savedTheme);
    }
});

// 复制提示
document.body.oncopy = function () {
    mdui.snackbar({
        message: '复制成功，如需转载请保留链接。',
        position: 'top',
    });
};
