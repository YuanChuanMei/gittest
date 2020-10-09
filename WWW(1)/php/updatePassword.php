<?php
//前端传递过来的数据
$username=$_POST["username"];
$password=$_POST['newpassword'];
$conn=mysqli_connect("localhost","root","root","test");
$sql="update userinfo set password='$password' where username='$username'";
$result=mysqli_query($conn,$sql);
	
	if($result==0){
		$arr=array("error"=>1,"msg"=>"修改失败");
	}else{
		$arr=array("error"=>0,"msg"=>"修改成功");
	}
	
	echo json_encode($arr);
	mysqli_close($conn);
	

?>