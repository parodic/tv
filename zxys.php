<!doctype html>
<html lang="zh-CN">
 <head> 
  <meta charset="UTF-8"> 
  <title>黑木耳资源</title> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
  <style>
        body {
            background-color: #66bb6a; /* 浅绿色 */
            text-align: center; /* 中心对齐 */
            margin: 0; /* 去除默认的边距 */
        }

        #categories {
            position: fixed; /* 固定在页面上 */
            top: 0; /* 顶部 */
            left: 0; /* 左侧 */
            width: 100%; /* 宽度100% */
            z-index: 1000; /* 确保在其他内容之上 */
            background-color: #66bb6a; /* 背景色 */
            padding: 10px 0; /* 内边距 */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* 添加阴影 */
            overflow-x: auto; /* 允许横向滚动 */
            white-space: nowrap; /* 防止换行 */
        }

        #content-area {
            overflow-y: auto; /* 允许垂直滚动 */
        }

        /* 占位符 */
        #placeholder {
            height: 180px; /* 占位符高度，与分类区域高度一致 */
        }

        input[type='text'] {
            font-size: 36px; /* 字符大小 */
            padding: 20px;
            width: 450px; /* 加长搜索框宽度 */
            border-radius: 30px; /* 圆角 */
            border: 2px solid #ccc; /* 边框 */
        }

        button {
            font-size: 36px; 
            padding: 10px; 
            border-radius: 30px; /* 按钮圆角 */
            background: none; 
            border: none; 
            cursor: pointer; 
        }

        /* 分类部分样式 */
        ul {
            list-style-type: none; /* 去除列表前的符号 */
            padding: 0; /* 去除内边距 */
            display: flex; /* 使用 Flexbox 布局 */
            justify-content: flex-start; /* 从左侧开始对齐 */
            margin: 0; /* 去除外边距 */
        }

        li {
            font-size: 48px; /* 分类文字大小 */
            margin: 0 20px; /* 分类之间的间距 */
            cursor: pointer; /* 鼠标悬停效果 */
        }

        /* 图标样式 */
        .icon {
            font-size: 48px; /* 增大图标大小 */
            margin-right: 60px; /* 增加图标与搜索框之间的间距 */
            vertical-align: middle; /* 垂直对齐 */
        }

        /* 调整表单样式以居中对齐 */
        form {
            display: flex; /* 使用 Flexbox 布局 */
            align-items: center; /* 垂直居中对齐 */
            justify-content: center; /* 水平居中对齐 */
            margin-bottom: 20px; /* 底部间距 */
        }
    </style> 
 </head> 
 <body> 
  <div id="categories"> 
   <form method="get" action="2253-2.php" style="margin-bottom: 20px;"> 
    <i class="fas fa-cube menu-trigger" style="margin-right: 60px; font-size: 48px;"></i> 
    <!-- 立方体图标 --> 
    <input type="text" name="wd" placeholder="搜索..." required style="font-size: 36px; padding: 20px; width: 450px; border-radius: 30px; border: 2px solid #ccc;" value=""> 
    <!-- 搜索框 --> 
    <!-- 隐藏字段 --> 
    <input type="hidden" name="db" value="https://api.paoyun.eu.org/python/dy.db"> 
    <input type="hidden" name="title" value="黑木耳资源"> 
    <button type="submit"><i class="fas fa-search"></i></button> 
    <!-- 搜索按钮 --> 
   </form> 
   <div style="overflow-x: auto; white-space: nowrap; margin-bottom: 20px;">
    <ul style="list-style-type: none; padding: 0; text-align: center; display: flex;">
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-0" onclick="window.location.href='?t=500&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">最近更新</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-1" onclick="window.location.href='?t=6&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">剧情片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-2" onclick="window.location.href='?t=7&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">动作片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-3" onclick="window.location.href='?t=8&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">冒险片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-4" onclick="window.location.href='?t=10&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">喜剧片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-5" onclick="window.location.href='?t=11&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">奇幻片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-6" onclick="window.location.href='?t=12&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">恐怖片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-7" onclick="window.location.href='?t=13&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">国产剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-8" onclick="window.location.href='?t=14&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">港剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-9" onclick="window.location.href='?t=15&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">韩剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-10" onclick="window.location.href='?t=16&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">日剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-11" onclick="window.location.href='?t=20&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">悬疑片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-12" onclick="window.location.href='?t=21&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">惊悚片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-13" onclick="window.location.href='?t=22&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">灾难片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-14" onclick="window.location.href='?t=23&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">爱情片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-15" onclick="window.location.href='?t=24&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">犯罪片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-16" onclick="window.location.href='?t=25&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">科幻片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-17" onclick="window.location.href='?t=26&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">动画电影</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-18" onclick="window.location.href='?t=28&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">泰剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-19" onclick="window.location.href='?t=29&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">台剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-20" onclick="window.location.href='?t=30&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">欧美剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-21" onclick="window.location.href='?t=31&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">新马剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-22" onclick="window.location.href='?t=32&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">其他剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-23" onclick="window.location.href='?t=33&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">歌舞片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-24" onclick="window.location.href='?t=34&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">战争片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-25" onclick="window.location.href='?t=35&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">经典片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-26" onclick="window.location.href='?t=36&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">网络电影</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-27" onclick="window.location.href='?t=37&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">其它片</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-28" onclick="window.location.href='?t=38&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">国产综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-29" onclick="window.location.href='?t=39&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">港台综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-30" onclick="window.location.href='?t=40&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">韩国综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-31" onclick="window.location.href='?t=41&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">日本综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-32" onclick="window.location.href='?t=42&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">欧美综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-33" onclick="window.location.href='?t=43&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">新马泰综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-34" onclick="window.location.href='?t=44&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">其他综艺</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-35" onclick="window.location.href='?t=45&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">古装短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-36" onclick="window.location.href='?t=46&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">虐恋短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-37" onclick="window.location.href='?t=47&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">逆袭短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-38" onclick="window.location.href='?t=48&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">悬疑短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-39" onclick="window.location.href='?t=49&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">神豪短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-40" onclick="window.location.href='?t=50&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">重生短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-41" onclick="window.location.href='?t=51&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">复仇短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-42" onclick="window.location.href='?t=52&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">穿越短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-43" onclick="window.location.href='?t=53&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">甜宠短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-44" onclick="window.location.href='?t=54&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">强者短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-45" onclick="window.location.href='?t=55&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">萌宝短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-46" onclick="window.location.href='?t=56&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">其它短剧</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-47" onclick="window.location.href='?t=57&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">欧美动漫</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-48" onclick="window.location.href='?t=58&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">日本动漫</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-49" onclick="window.location.href='?t=59&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">韩国动漫</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-50" onclick="window.location.href='?t=60&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">国产动漫</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-51" onclick="window.location.href='?t=61&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">港台动漫</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-52" onclick="window.location.href='?t=62&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">新马泰动漫</li>
     <li style="font-size: 48px; margin: 0 20px; cursor: pointer;" id="category-link-53" onclick="window.location.href='?t=63&amp;db=.%2Fpython%2Fdy.db&amp;title=%E9%BB%91%E6%9C%A8%E8%80%B3%E8%B5%84%E6%BA%90'">其它动漫</li>
    </ul>
   </div>
   <script>
                let defaultClickTriggered = false; // 追踪默认点击状态
                document.addEventListener('DOMContentLoaded', function() {
                    if (!defaultClickTriggered) {
                        document.getElementById('category-link-0').click();
                        defaultClickTriggered = true; // 防止再次触发
                    }
                });
            </script> 
   <div class="menu" id="dropdown-menu"> 
    <!-- 动态生成的选项 --> 
   </div> 
  </div> 
  <div id="placeholder"> 
  </div> 
  <div id="content-area"> 
  </div> 
  <style>
    /* 其他样式... */

.menu {
    display: none; /* 初始不显示 */
    position: fixed; /* 固定定位 */
    top: 60px; /* 根据需要调整位置 */
    left: 0; /* 确保左对齐 */
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 30px; /* 增大圆角边框 */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
    z-index: 1000; /* 确保菜单在最上层 */
    width: 440px; /* 菜单宽度加倍 */
    padding: 20px; /* 增加内边距 */
    transition: all 0.3s; /* 添加过渡效果 */
}

.menu a {
    display: block;
    text-align: center; /* 中心对齐 */
    padding: 20px; /* 选项的内边距增大 */
    text-decoration: none;
    color: #333;
    border-radius: 15px; /* 增大选项的圆角 */
    background-color: #f9f9f9; /* 选项背景 */
    margin: 10px 0; /* 每个选项之间的间距增大 */
    transition: background-color 0.2s; /* 悬停时的背景颜色过渡 */
    font-size: 48px; /* 增大文字大小 */
}

    .menu a:hover {
        background-color: #e0e0e0; /* 鼠标悬停效果 */
    }
</style> 
  <script>
    let dbfile = ''; // 声明 dbfile 变量
    let title = '';
    // 使用 Fetch API 读取 JSON 文件
    fetch('https://api.paoyun.eu.org/json/kldy.json') // 调整路径以正确加载 JSON 文件
        .then(response => {
            if (!response.ok) {
                throw new Error('网络响应失败');
            }
            return response.json();
        })
        .then(data => {
            // 获取 'xq' 数组
            const xqList = data.xq;
            const menu = document.getElementById('dropdown-menu');

 /*           // 默认选择第一个项
            if (xqList.length > 0) {
                dbfile = xqList[0].wj; // 设置默认 dbfile
                document.title = xqList[0].name; // 设置默认标题
            }*/

// 将每个 'name' 添加到选择菜单
xqList.forEach(item => {
    const a = document.createElement('a');
    a.href = `2253-2.php?db=${encodeURIComponent(item.wj)}&title=${encodeURIComponent(item.name)}`;
    a.textContent = item.name;

    // 添加点击事件，更新标题和 dbfile
    a.addEventListener('click', (event) => {
        event.preventDefault();
  /*      document.title = item.name; // 更新网页标题*/
        title = item.name;
        dbfile = item.wj; // 更新 dbfile
        menu.style.display = 'none'; // 关闭菜单

        // 更新 URL 参数并重新加载页面
        window.location.href = `2253-2.php?db=${encodeURIComponent(dbfile)}&title=${encodeURIComponent(item.name)}`;
    });

    menu.appendChild(a);
});
        })
        .catch(error => {
            console.error('获取 JSON 文件出错:', error);
        });

// 处理图标按钮点击事件，显示或隐藏菜单
const menuTrigger = document.querySelector('.menu-trigger');
menuTrigger.addEventListener('click', (event) => {
    const menu = document.getElementById('dropdown-menu');

    // 计算菜单位置
    const rect = menuTrigger.getBoundingClientRect();
    menu.style.top = `${rect.bottom}px`; // 将菜单定位到图标下方
    menu.style.left = `${rect.left}px`; // 将菜单左对齐

    // 切换菜单的显示状态
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
});
</script> 
  <div style="display: flex; flex-wrap: wrap; margin-top: 20px;"></div> 
  <div id="content"></div> 
  <!-- 用于动态加载内容的容器 --> 
  <script>
// 自动加载更多内容
var page = 1; // 当前页面
var typeId = ; // 当前分类 ID
var hasMorePages = false; // 是否还有下一页

window.onscroll = function() {
    if (hasMorePages && (window.innerHeight + window.scrollY) >= document.body.offsetHeight - 10) {
        loadMoreContent();
    }
};

var page = 1; // 当前页数，初始值为 1
var hasMorePages = true; // 是否有更多页面

function loadMoreContent() {
    if (!hasMorePages) return; // 如果没有更多页面，返回

    var db = encodeURIComponent('https://api.paoyun.eu.org/python/dy.db'); // 从 PHP 获取 db 变量
    var title = encodeURIComponent('黑木耳资源'); // 从 PHP 获取 title 变量

    var xhr = new XMLHttpRequest();
    xhr.open('GET', '?t=' + typeId + '&pg=' + (++page) + '&db=' + db + '&title=' + title, true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // 创建新内容
            var newContent = document.createElement('div');
            newContent.innerHTML = xhr.responseText;

            // 将新内容添加到页面
            var contentArea = document.getElementById('content');
            contentArea.appendChild(newContent);

            // 如果页数大于 1，删除占位符
            if (page > 1) {
                removePlaceholder();
            }

            // 检查是否还有更多页面
            hasMorePages = newContent.innerHTML.includes('<div style="margin: 10px; display: inline-block; width: 30%; text-align: center;">');
        } else {
            hasMorePages = false; // 请求失败
        }
    };
    xhr.send();
}

// 删除占位符函数
function removePlaceholder() {
    var placeholder = document.getElementById('placeholder');
    if (placeholder) {
        placeholder.remove();
    }
}

// 监听滚动事件
window.addEventListener('scroll', function() {
    // 检查用户是否接近页面底部（提前 10px 检测）
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 10) {
        removePlaceholder();
    }
});
</script>
 </body>
</html>