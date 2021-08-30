<?php 
//select questionTitle,answerA,answerB,answerC,answerD,examDifficulty,examScore from ex_exam join ex_experiment ON ex_exam.examNo(left(examNo,4)) = ex_experiment.expNo where ex_experiment.expNo ='W002'
    require "conn.php";
    //执行sql语句查询
    $wcs = $_GET["wcs"];
    if($wcs=='W002'){
        $wljj_sql ="select questionTitle,answerA,answerB,answerC,answerD,examDifficulty,examScore,rightAnswer,userKey from ex_userexam LEFT JOIN (ex_exam LEFT JOIN ex_experiment ON SUBSTR(ex_exam.examNo,1,4)= ex_experiment.expNo)on ex_userexam.examID=ex_exam.EX_EXAMOID where ex_experiment.expNo ='W002'and ex_userexam.userID='172210409235周浩樑'";
    }else {
        $wljj_sql = "select questionTitle,answerA,answerB,answerC,answerD,examDifficulty,examScore,rightAnswer from ex_exam join ex_experiment ON SUBSTR(ex_exam.examNo,1,4)= ex_experiment.expNo where ex_experiment.expNo ='$wcs'";

    }

    //查询结果集
    $wljj_result = mysqli_query($link,$wljj_sql);
    $wljj_array = Array();
    while($wljj_arr=mysqli_fetch_array($wljj_result,MYSQLI_ASSOC)){
        array_push($wljj_array,$wljj_arr);
    }
    echo json_encode($wljj_array);

?>

