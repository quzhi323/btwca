<?php 
//用户删除指定记录 deleterc.php
//判断是否按下提交按钮
    if(isset($_POST["submit"]) && $_POST["submit"] == "Delete") 
    { 
     //将用户名和密码存入变量中，供后续使用
        $user_id = $_POST["user_id"];
        $flag = $_POST["flag"]; // 1: cpdriver, 2: cppax, 3: ttdriver, 4: ttpax, 5: apdriver, 6: appax
        $cprec_id = $_POST["cprec_id"];  
        if($user_id == "" || $username == "") 
        {
         //用户名或者密码其中之一为空，则弹出对话框，确定后返回当前页的上一页 
            echo "<script>alert('请登录!'); history.go(-1);</script>"; 
        } 
        else 
        { //确认用户名密码不为空，则连接数据库
            $conn = mysqli_connect("localhost","root","");//数据库帐号密码为安装数据库时设置
            if(mysqli_errno($conn))
            {
                echo mysqli_errno($conn);
                exit;
            }
            mysqli_select_db($conn,"userdb"); 
            mysqli_set_charset($conn,'utf8'); 
            // require 'conndb.php';

            if($flag == "1")
            {
                $sql = "delete from cpdriverrec where cpdriverrec_id = '$cprec_id' and user_id = '$user_id'";
            }
            else if ($flag == "2")
            {
                $sql = "delete from cppaxrec where cppaxrec_id = '$cprec_id' and user_id = '$user_id'";
            }
            // $sql = "select user_id, username,userpwd from user where username = '$user' and userpwd = '$psw'"; 
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                echo "<script>alert('成功删除！'); window.location.href='homepage.php';</script>";
            }
            else
            {
                echo "<script>alert('未找到该记录！');</script>";
            }
        } 
     } 
     else 
     { 
        echo "<script>alert('提交未成功！');</script>"; 
     } 
 
?> 