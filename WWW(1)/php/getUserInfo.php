<?php
	// echo "{'a':1}"
	// $username=$_POST["username"];
	// $password=$_POST["password"];
	//echo $usernmae.$password;
	//连接数据库
	$conn=mysqli_connect("localhost","root","root","test");
	//echo mysql_connect_error();
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//定义sql语句
	$query="SELECT * FROM userinfo";
	
	//echo $query;
	//执行
	$result=mysqli_query($conn,$query);
	$arr=array();
	while($row=mysqli_fetch_array($result)){
		array_push($arr,$row);
	}
	echo json_encode($arr);
	mysqli_close($conn);
	
?>