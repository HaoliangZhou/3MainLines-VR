<?php
    $host="127.0.0.1";//localhost
    $user="root";
    $passward="root";
    $dbname="wx";
    $link=mysqli_connect($host,$user,$passward);
    //or die("数据库连接失败".mysql_error());
    mysqli_select_db($link,$dbname);
    // mysqli_query("set names 'utf8'");
    // echo"数据库连接正常";


   
?>