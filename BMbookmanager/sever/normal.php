<?php
header("Content-type:application/json;charset=UTF-8");

header('Access-Control-Allow-Origin:*');
include("conn.php");
// $link=mysqli_connect('localhost','root','123456789','library','3306');
if($link){
	$bookid= $_POST['bookid'];
	$rid= $_POST['rid'];
	mysqli_query($link,'SET NAMES utf8');
	$sql="UPDATE `borrow` SET `status`='正常' WHERE `bookid`={$bookid} AND `rid`={$rid}";
	mysqli_query($link,'SET NAMES utf8');
	mysqli_query($link,$sql);
	 echo json_encode(array('借书状态'=>'正常'));
}

mysqli_close($link);
?>