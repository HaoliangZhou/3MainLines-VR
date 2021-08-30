<?php 
header("Content-type: text/html; charset=utf-8");

	// $aa = " My name is HAOLIANG ZHOU ";
	// echo ltrim($aa);	
	// echo strlen($aa);
	// echo "<br>";
	// $user = $_GET["user"];
	// // $pwd = $_GET["password"];
	// // echo $user,$pwd;
	// echo $user;

	// $userInfo = $_GET["userInfo"];
	// // $pwd = $_GET["password"];
	// // echo $user,$pwd;
	// var_dump("1111",$userInfo) ;

	//把字符串处理成对象
	// $jsonUserInfo = json_encode($userInfo);
	// print_r( json_decode($jsonUserInfo ));
	// print_r( json_decode($userInfo));
	
	// //类 提取
	require "userInfoClass.php";
	// $UIClass = new userInfo1();
	// $UIClass ->nickName="zhl";
    // $UIClass ->gender="1";
    // $UIClass ->language="en";
	// $UIClass ->city="shaoxing";
	// $UIClass ->province="浙江";
    // $UIClass ->country="china";
	// $UIClass ->avatarUrl="111";
	
	// var_dump(json_encode($UIClass));
	// echo"<br>";
	// echo"<br>";
	// echo(json_encode($UIClass));
	// print_r("<br>");
	// print_r("<br>");
	// print_r(json_encode($UIClass));

	// require "user.php";
	// $user = new user();

	$array1 = Array();
	for($i=0;$i<5;$i++){
		$UIClass = new userInfoClass();
		$UIClass ->nickName="周浩樑";
		$UIClass ->gender="1";
		$UIClass ->language="中文";
		$UIClass ->city="绍兴";
		$UIClass ->province="浙江";
		$UIClass ->country="中国";
		// $UIClass ->avatarUrl="111";
		array_push($array1,$UIClass);
	}
	print_r(json_encode($array1)) ;

	// $user ->userInfoClass = $UIClass;
	// echo json_encode($user);

// 	//数组
// 	$array = Array("name"=>"周","nick"=>"b","other"=>"c");
// 	print_r("<br>");
// 	print_r("<br>");
// 	print_r($array);
// 	print_r("<br>");
// 	print_r("<br>");
// 	print_r(json_encode($array));
// 	//
// 	print_r( json_decode(json_encode($UIClass)));


// ?>