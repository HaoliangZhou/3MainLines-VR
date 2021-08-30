<?php
//排行榜 班级
// SELECT * FROM `ex_userexpscore` where UserID in (select sys_usersOID from sys_users where className='1722104092');
//个人详情
//SELECT * FROM `ex_userexpscore` where UserID in (select sys_usersOID from sys_users where displayname Like '周浩樑');
//个人积分
//SELECT UserID,SUM(score),SUM(onlineTime) FROM `ex_userexpscore` where UserID in (select sys_usersOID from sys_users where displayname Like '周浩樑');
//班级积分
//SELECT UserID ,SUM(score) as 积分,SUM(onlineTime) as 时长 FROM `ex_userexpscore` where UserID in (select sys_usersOID from sys_users where className='1722104092') GROUP BY UserID;
//最终,二班按照积分降序，id分组所获得的表
//SELECT displayName as 姓名,sno as 学号,SUM(score) as 积分,SUM(onlineTime) as 时长 FROM `ex_userexpscore` join `sys_users` on ex_userexpscore.UserID = sys_users.sys_usersOID where UserID in (select sys_usersOID from sys_users where className='1722104092') GROUP BY UserID order BY SUM(score) desc;	
    
    require "conn.php";
    //执行sql语句查询
    // $wcs = $_GET["wcs"];
    $phb_sql = "SELECT displayName,sno,SUM(score) as jf,SUM(onlineTime) as sc ,photoUrl FROM `ex_userexpscore` join `sys_users` on ex_userexpscore.UserID = sys_users.sys_usersOID where UserID in (select sys_usersOID from sys_users where className='1722104092' and displayname <>'') GROUP BY UserID order BY SUM(score) desc";

    //查询结果集
    $phb_result = mysqli_query($link,$phb_sql);
    $phb_array = Array();
    while($phb_arr=mysqli_fetch_array($phb_result,MYSQLI_ASSOC)){
        array_push($phb_array,$phb_arr);
    }
    echo json_encode($phb_array);



?>