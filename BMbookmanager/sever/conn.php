<?php

$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "library";
 
// 创建连接
$link=mysqli_connect('localhost','root','123456789',"library",'3306');
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
} 
else{
	//echo "连接数据库成功";
}
$link->set_charset('utf8');




?>