<?php 
header("Content-type: text/html; charset=utf-8");

    require "userInfoClass.php";
	$userInfo = $_GET["userInfo"];
	// $pwd = $_GET["password"];
	// echo $user,$pwd;
    // var_dump($userInfo) ;
	  
	// $array1 = Array();
	// for($i=0;$i<5;$i++){
	// 	if(!empty($userInfo)){
	// 		foreach(json_decode($userInfo) as $key=>$value){
	// 			echo $key,":",$value,"<br/>","\n";
				
	// 		}
	// 	}
	// 	$UIClass = new userInfoClass();
	// 	$UIClass ->key="$value";
	// 	array_push($array1,$UIClass);
	// }
	
	$array1 = Array();
	for($i=0;$i<5;$i++){
		if(!empty($userInfo)){
			foreach(json_decode($userInfo) as $key=>$value){
				// echo $key,":",$value,"<br/>","\n";
				array_push($array1,$value);
			}
		}
		// $UIClass = new userInfoClass();
		// $UIClass ->key="$value";
		// array_push($array1,$UIClass);
	}
	echo json_encode($array1);
	
?>