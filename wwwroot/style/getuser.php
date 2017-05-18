<?php
$username=$_POST["username"];
    try{
        $dsn='mysql:host=localhost;dbname=system';
        $pdo=new PDO($dsn, 'root', '1547923100');
        //设置字符集为utf8
        $pdo->query('set names utf8');
        //设置PDO错误警告模式，用于调试
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }catch( PDOException $e){
        echo "error:". $e->getMessage() . '<br>';
        exit();
    }
 $sql="select * from userinfo where username='{$username}'";
    $rs=$pdo->query($sql);
    $result=$rs->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        echo 't';
    }else{
        echo 'f';
    }
    ?>