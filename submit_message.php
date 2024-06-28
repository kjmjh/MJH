<?php
// 获取表单提交的数据
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// 将留言数据存储到数据库或其他存储系统中
// ...
// 重定向回留言板页面，以便显示新留言
header('Location: message_board.html');
exit;
?>