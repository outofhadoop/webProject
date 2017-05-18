<?php
header('Content-type:text/html;charset=utf-8');
// 获取注册页面的值：
$username = trim($_POST['username']);
$password = $_POST['password'];
$sex = $_POST['sex'];
$contact = $_POST['contact'];
$hometown = $_POST['hometown'];
$birthday = $_POST['birthday'];
$role = 1;
$dsn='mysql:host=localhost;dbname=system';
$pdo=new PDO($dsn, 'root', '1547923100');
$sql = "insert into userinfo(username,password,sex,contact,hometown,birthday,role) values('{$username}','{$password}','{$sex}','{$contact}','{$hometown}','{$birthday}','{$role}')";
if ($pdo->exec($sql)) {
//重定向浏览器 
header("Location: registerSuccess.html"); 
//确保重定向后，后续代码不会被执行 
exit;
}

  ?>