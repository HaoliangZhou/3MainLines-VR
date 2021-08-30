<?php

    require "conn.php";
    //执行sql语句查询
    $sql = "select * from userinfo";
    //查询结果集
    $result = mysqli_query($link,$sql);
    // //取出结果
    // //先取出一行
    // //数字数组
    // print_r (mysqli_fetch_row($result));
    // echo"<br/>";
    // //关联数组与数字数组
    // print_r (mysqli_fetch_array($result));
    // echo"<br/>";
    // //关联数组
    // print_r(mysqli_fetch_assoc($result));


    // //循环取出所有数据 关联数组
    // while($arr=mysqli_fetch_row($result)){
    //     echo "wxID:",$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],"<br/>";
    // }

    // //循环取出所有数据 关联数组
    // while($arr=mysqli_fetch_assoc($result)){
    //     echo $arr["wxID"],"<br/>";
    // }

    // //循环取出所有数据 关联+数字数组
    // while($arr=mysqli_fetch_array($result)){
    //     echo $arr["wxID"],"<br/>";
    //     echo $arr[1],"<br/>";
    // }

    // while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    //     echo $arr["wxID"],"<br/>";
    //     echo $arr[1],"<br/>";
    // }

    //作业
    $array2 = Array();
	// for($i=0;$i<5;$i++){
	// 	if(!empty($arr)){
			while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                // echo "wxID:",$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],"<br/>";
                // $ar=Array("微信号"=>$arr["wxID"],"昵称"=>$arr["nickName"],"性别"=>$arr["gender"],"语言"=>$arr["languages"],"城市"=>$arr["city"],"省份"=>$arr["province"],"国家"=>$arr["country"]);
                array_push($array2,$arr);
            }
            
	// 	}
	// 	// $UIClass = new userInfoClass();
	// 	// $UIClass ->key="$value";
	// 	// array_push($array1,$UIClass);
	// }
    echo json_encode($array2);

?>

