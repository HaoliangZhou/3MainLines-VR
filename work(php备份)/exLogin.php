<?php
    require "conn.php";
    //执行sql语句查询
    $wcs = $_GET["wcs"];
    // $wcs1 = $_GET["wcs1"];
    // $array=json_decode($wcs,true);//整串
    
    //SELECT displayname,sno,email,className,subject,college FROM sys_users WHERE sno='172210409235'ORDER BY displayname asc LIMIT 1;
    $wljj_sql = "SELECT displayname,sno,email,className,subject,college FROM sys_users WHERE sno='$wcs'  ORDER BY displayname asc LIMIT 1;";

    //查询结果集
    $wljj_result = mysqli_query($link,$wljj_sql);
    $wljj_array = Array();
    while($wljj_arr=mysqli_fetch_array($wljj_result,MYSQLI_ASSOC)){
        array_push($wljj_array,$wljj_arr);
    }
    echo json_encode($wljj_array);

?>