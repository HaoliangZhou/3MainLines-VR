<?php
    require_once "conn.php";
    $exLt1 = $_GET["exLt1"];
    $array2=json_decode($exLt1,true);
    $sql = sprintf("insert into exLt(ltName,ltContent) values('%s','%s')",$array2["input1"],$array2["input2"]);
    $result_insert = mysqli_query($link,$sql);

    $lt_sql = "select ltName,ltContent from exLt where ltName <>''";
    //查询结果集
    $lt_result = mysqli_query($link,$lt_sql);
    $lt_array = Array();
    while($lt_arr=mysqli_fetch_array($lt_result,MYSQLI_ASSOC)){
        array_push($lt_array,$lt_arr);
    }
    echo json_encode($lt_array);


?>