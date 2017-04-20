<? php
header('Content-type:text/html;charset=utf8');
try{
	$dsn='mysql:host=localhost;dbname=system';
	$pdo= new PDO($dsn,'root','han7111119314');
	$pdo->query('set names UTF-8');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	
}catch(PDOException $e){
echo "error".$e->getMessage().'<br>';
exit();
}
$sql="select * from userinfo where username='admin' and password='1547923100'";
$rs=$pdo->query($sql);
$result=$rs->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
 <meta content="charset=utf-8">
	<title></title>
</head>
<body>
<!-- <?php if($result){
	echo "查询成功".$result['username'];
} ?> -->
<div>asdjfhadhkjah</div>
</body>
</html>