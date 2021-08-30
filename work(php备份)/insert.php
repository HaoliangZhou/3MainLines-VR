<?php
    require_once "conn.php";
    //$link
    //插入

    // $a="9992234151";
    // $b="罗贯中";
    // $sql="insert into userinfo (wxID,nickName) values(209182053,'马云')";
    // $sql="insert into userinfo (wxID,nickName) values("."99123456".",'"."李哥"."')";
    // $sql = sprintf("insert into userinfo(wxID,nickName) values(%d,'%s')",$a,$b);
    // // echo $sql;
    // echo mysqli_query($link,$sql);

    // //先查询是否存在，若不存在则插入
    // $sql_cx=sprintf("select*from userinfo where nickName='%s'",$b);
    // $result_cx=mysqli_query($link,$sql_cx);
    // // echo mysqli_num_rows($result_cx);
    // if( $result_cx<1){
    //     $sql = sprintf("insert into userinfo(wxID,nickName) values(%d,'%s')",$a,$b);
    //     $result_insert = mysqli_query($link,$sql);
    //     // echo $result_insert;
    //     if($result_insert==true){
    //         echo 1;
    //     }else{
    //         echo 0;
    //     }

    // }else{
    //     echo"已存在该行";
    // }
    

    //以下为点击获取微信信息按钮能把微信信息读取并保存到数据库
    // require "userInfoClass.php";
    // $userInfo = $_GET["userInfo"];
    
    // $array1 = Array();
	// 	if(!empty($userInfo)){
	// 		foreach(json_decode($userInfo) as $key=>$value){
	// 			// echo $key,":",$value,"<br/>","\n";
	// 			array_push($array1,$value);
    //         }
    //     }
    
        

    // //用数组方法
    // $array1 = Array();
    // $array1 = json_decode($userInfo);

    // echo json_encode($array1);
    // $userinfo_jx=json_decode($userinfo,true);
    //插入语句    
    // $b="1";$c="1";$d="1";$e="1";$f="1";$g="1";$h="1";
    // $b=$array1[0];$c=$array1[1];$d=$array1[2];$e=$array1[3];$f=$array1[4];$g=$array1[5];$h=$array1[6];
    // $sql = sprintf("insert into userinfo(wxID,nickName,gender,languages,city,proince,country,picUrl) values(%d,'%s','%s','%s','%s','%s','%s','%s')",$a,$b,$c,$d,$e,$f,$g,$h);
    // $result_insert = mysqli_query($link,$sql);   

    
    //新方法--点击获取微信信息按钮能把微信信息读取并保存到数据库

    $userInfo = $_GET["userInfo"];
    $a=9992234151;
    $array2=json_decode($userInfo,true);
    //先查询是否存在，若不存在则插入
    $sql_cx2=sprintf("select*from userinfo where nickName='%s'",$array2["nickName"]); 
    $result_cx2=mysqli_query($link,$sql_cx2);
    if( mysqli_num_rows($result_cx2)<1){
        $sql = sprintf("insert into userinfo(wxID,nickName) values(%d,'%s')",$a,$array2["nickName"]);
        $result_insert = mysqli_query($link,$sql);

        if($result_insert==true){
            echo 1;
        }else{
            echo 0;
        }

    }else{
        echo"已存在该行";
    }
 

    
    

?>