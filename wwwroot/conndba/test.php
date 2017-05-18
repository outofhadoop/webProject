<?php
$host = 'localhost';
$database = 'system';
$username = 'root';
echo "$username";
$password = '1547923100';
$selectName = 'admin';//要查找的用户名，一般是用户输入的信息
echo "$selectName";
$connection = mysql_connect($host, $username, $password);//连接到数据库
echo "$selectName";
mysql_query("set names 'utf8'");//编码转化
echo "sdfadsfadfadsfadf";
if (!$connection) {
  die("could not connect to the database.\n" . mysql_error());//诊断连接错误
}
$selectedDb = mysql_select_db($database);//选择数据库
if (!$selectedDb) {
  die("could not to the database\n" . mysql_error());
}
$selectName = mysql_real_escape_string($selectName);//防止SQL注入
$query = "select * from user where name = '$selectName'";//构建查询语句
$result = mysql_query($query);//执行查询
if (!$result) {
  die("could not to the database\n" . mysql_error());
}
while ($row = mysql_fetch_row($result)) {
  //取出结果并显示
  $name = $row[0];
  echo "Name: $name ";
  echo "\n";
}

  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
</head>
<body>
    <div class="container" id="container">
        <div class="topbar" id="topbar">

        </div>
        <div class="content" id="content">
                <img src="\pictures\dongtaitu.gif" alt="这是一个动态图">
        </div>
        <div class="footing">

        </div>
    </div>
</body>
</html>

