<?php
$username=$_GET["username"];
$conn=mysqli_connect("localhost","root","root","test");
$sql="delete from userinfo where username='$username'";
$result=mysqli_query($conn,$sql);
	
	if($result==0){
		$arr=array("error"=>1,"msg"=>"删除失败");
	}else{
		$arr=array("error"=>0,"msg"=>"删除成功");
	}
	// if($result==0){
		// }
	echo json_encode($arr);
	mysqli_close($conn);
	

?>