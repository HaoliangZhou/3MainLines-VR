<?php
require "conn.php";
//执行sql语句查询
$wcs = $_GET["wcs"];
$wljj_sql = "SELECT expLogo FROM ex_experiment where expNo ='$wcs'";

//查询结果集
$wljj_result = mysqli_query($link,$wljj_sql);
$wljj_array = Array();
while($wljj_arr=mysqli_fetch_array($wljj_result,MYSQLI_ASSOC)){
    array_push($wljj_array,$wljj_arr);
}
echo json_encode($wljj_array);




?>