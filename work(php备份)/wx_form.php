<?php
    require_once "conn.php";
    $wxForm=$_GET["wxForm"];
    $array1=json_decode($wxForm,true);//整串
    $array11=$array1["checkbox"];//checkbox
    $array111 = implode("丨",$array11);//转checkbox内容为字符串
    $sql = sprintf("insert into wx_form(checkbox,input,radio,slider,switch) values('%s','%s','%s','%s','%s')",
        $array111,$array1["input"],$array1["radio"],$array1["slider"],$array1["switch"]);
    $result_insert = mysqli_query($link,$sql);

?>