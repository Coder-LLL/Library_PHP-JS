<?php
	header("Content-type:application/json;charset=UTF-8");
	header("Access-Control-Allow-Origin: *");
	include("conn.php");
	// $link=mysqli_connect('localhost','root','123456789','library','3306');
	if($link)
	{
		if($_POST['userid']){
			$rid=$_POST['userid'];
			$sql="SELECT name FROM  reader WHERE `rid`='{$rid}'";
			mysqli_query($link,'SET NAMES utf8');
			$result = mysqli_query($link,$sql);
			$query=mysqli_query($link,"SELECT * FROM  reader WHERE `rid`='{$rid}'");
			while($row=mysqli_fetch_assoc($query)){
			$arr['list'][]=array(
                  'rid'=>$row['rid'],
                  'name'=>$row['name'],
                  'email'=>$row['e-mail'],
                  'sex'=>$row['sex'],
                  'age'=>$row['age'],
              );
		
		}echo json_encode($arr);
	}
	else{
           $sql="SELECT * FROM reader";
           mysqli_query($link,'SET NAMES utf8');
           $result = mysqli_query($link,$sql);
           $senddata=array();
           while($row=mysqli_fetch_assoc($result)){
            array_push($senddata, array(
               'rid'=>$row['rid'],
                  'name'=>$row['name'],
                  'email'=>$row['e-mail'],
                  'sex'=>$row['sex'],
                  'age'=>$row['age'],
        ));
				}echo json_encode($senddata);
}
}
	else{
		echo json_encode(array('连接信息'=>'连接失败'));
	}

	 mysqli_close($link);

?>