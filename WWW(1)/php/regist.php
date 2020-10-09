<?php
	// 获取数据
	$username = $_POST["username"];
	$password = $_POST["password"];
	// 链接数据库
	$con = mysqli_connect("localhost", "root", "root", "test");
	// SQL语句
	
	$sql = "insert into userinfo  values('$username', '$password')";
	// 执行插入语句
	$result = mysqli_query($con, $sql);
	 
	// 判断 如果有结果 
	if ($result) {		
		$arr = array("error" => 0, "msg" => "注册成功");
	} else {
		$arr = array("error" => 1, "msg" => "用户注册失败");
	}
	echo json_encode($arr);

?>