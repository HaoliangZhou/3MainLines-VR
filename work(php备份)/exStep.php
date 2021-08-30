<?php
    require "conn.php";
    //执行sql语句查询
    $wcs = $_GET["wcs"];
    //$exStep_sql = "SELECT stepName,stepPoint FROM ex_experimentstep where EX_Experiment_FK='{00099FFB-0000-0000-0000-00009D2BDEB7}'";
    $exStep_sql = "SELECT stepName,stepPoint FROM ex_experimentstep join ex_experiment ON ex_experimentstep.EX_Experiment_FK = ex_experiment.EX_ExperimentOID where EX_Experiment.expNo='$wcs'";
    //查询结果集
    $exStep_result = mysqli_query($link,$exStep_sql);
    $exStep_array = Array();
    while($exStep_arr=mysqli_fetch_array($exStep_result,MYSQLI_ASSOC)){
        array_push($exStep_array,$exStep_arr);
    }
    echo json_encode($exStep_array);
    
?>