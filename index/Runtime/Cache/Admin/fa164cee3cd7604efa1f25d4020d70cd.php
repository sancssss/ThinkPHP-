<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/themes/blue.min.css" />
<link rel="stylesheet" href="/themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=yes" />
<meta name="format-detection" content="email=no" />
<meta name="description" 
content="扬州大学课程设计选题" />  
<meta name="keywords" 
content="扬州大学课程设计选题"/>  
<title>
<?php echo ($title); ?>|系统后台
</title>
<meta content="扬州大学课程设计选题" name="keywords" />
<!-- meta使用viewport以确保页面可自由缩放 -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- 引入 jQuery Mobile 样式 -->
 <link rel="stylesheet" href="http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- 引入 jQuery 库 -->
 <script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>

<!-- 引入 jQuery Mobile 库 -->
 <script src="http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">
  <div data-role="header"><h1>你好，超级管理员</h1> 
 <div data-role="navbar">
 <ul>
 <li><a href="/index.php/Admin/User/userList/isConfrim/1" data-icon = "info">用户申请</a></li>
 <li><a href="/index.php/Admin/User/userList/isConfrim/0" data-icon = "user" data-ajax="false">用户管理</a></li>
 <li><a href="/index.php/Admin/Course/courseList" data-icon = "grid" data-ajax="false">课程管理</a></li>
 <li><a href="/index.php/Admin/index/loginOut" data-icon = "back" data-ajax="false">退出系统</a></li>
 </ul>
 </div></div>
 <div data-role="content">

<ul data-role="listview" data-inset="true">
 <li data-role="list-divider">待处理的教师申请<span class="ui-li-count">共<?php echo ($count1); ?>条</span></li>
<?php if(is_array($resultUser)): $i = 0; $__LIST__ = $resultUser;if( count($__LIST__)==0 ) : echo "目前没有数据！" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li  data-icon="plus"> <a href="/index.php/Admin/User/index/id/<?php echo ($vo["user_id"]); ?>"><?php echo ($vo["user_name"]); ?></a><a href="/index.php/Admin/User/addTeacher/id/<?php echo ($vo["user_id"]); ?>">确认</a>
</li><?php endforeach; endif; else: echo "目前没有数据！" ;endif; ?>
 <li data-role="list-divider">最新添加课程<span class="ui-li-count">共<?php echo ($count2); ?>条</span></li>
<?php if(is_array($resutlCourse)): $i = 0; $__LIST__ = array_slice($resutlCourse,0,8,true);if( count($__LIST__)==0 ) : echo "目前没有数据！" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li > <a href="/index.php/Admin/Course/index/id/<?php echo ($vo["course_id"]); ?>"><?php echo ($vo["course_title"]); ?></a> <p class="ui-li-aside"><?php echo ($vo["user_name"]); ?></p></li><?php endforeach; endif; else: echo "目前没有数据！" ;endif; ?>
 <li>
<a href="/index.php/Admin/User/userList/isConfrim/0">查看全部课程</a>
</li>
 </ul>
</div>

  <div data-role="footer">
  <h1>课程设计选课系统-后台</h1>
  </div>

</body>
</html>