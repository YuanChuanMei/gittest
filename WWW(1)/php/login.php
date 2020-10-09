<?php
	// echo "{'a':1}"
	$username=$_POST["username"];
	$password=$_POST["password"];
	//echo $usernmae.$password;
	//连接数据库
	$conn=mysqli_connect("localhost","root","root","test");
	//echo mysql_connect_error();
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//定义sql语句
	$query="SELECT * FROM userinfo where username = '$username' and password='$password'";
	//echo $query;
	//执行
	$result=mysqli_query($conn,$query);
	//查询
	$arr=mysqli_fetch_assoc($result);
	if($arr){
		$JSON=array("error"=>0,"msg"=>"登录成功");
		}else{
			$JSON=array("error"=>1,"msg"=>"用户名或密码错误");
		}
	
	echo json_encode($JSON);
	mysqli_close($conn);
	
?>