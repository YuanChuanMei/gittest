<?php
	// 获取数据
	$username = $_GET["username"];
	// 链接数据库
	$con = mysqli_connect("localhost", "root", "root", "test");
	// SQL语句
	
	$sql = "SELECT * FROM userinfo WHERE username='$username'";
	// 查询
	$result = mysqli_query($con, $sql);
	// 从结果集中抽取一条数据
	$userInfo = mysqli_fetch_assoc($result);
	// 判断 如果有结果 
	if ($userInfo) {
		$arr = array("error" => 1, "msg" => "用户名已经被占用");
	} else {
		$arr = array("error" => 0, "msg" => "用户名可以使用");
	}
	echo json_encode($arr);

?>