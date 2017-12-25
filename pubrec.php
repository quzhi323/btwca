<?php
    session_start(); 
    date_default_timezone_set('EST');
    //注册处理界面 regcheck.php
    if(isset($_POST["submit"]) && $_POST["submit"] == "Publish" && isset($_SESSION['user_id'])) 
    { 

        $conn = mysqli_connect("localhost","root",""); //连接数据库,帐号密码为自己数据库的帐号密码 
        if(mysqli_errno($conn))
        {
            echo mysqli_error($conn);
            exit;
        }
        mysqli_select_db($conn,"userdb"); //选择数据库 
        mysqli_set_charset($conn,'utf8'); //设定字符集 

        $flag = $_POST["flag"]; // 0: driver; 1: passenger
        $dept_add = $_POST["dept_add"]; //departure address
        $dept_city = $_POST["dept_city"]; //departure city
        $dept_prov = $_POST["dept_prov"]; //departure provinence
        $dest_add = $_POST["dest_add"]; //destination address
        $dest_city = $_POST["dest_city"]; //destination city
        $dest_prov = $_POST["dest_prov"]; //destination provinence
        $wechat = $_POST["wechat"]; // wechat
        $phone = $_POST["phone"]; // phone
        $status = 0; // 0: imcomplete 1: completed
        $heat = 0; // 0 to 10, 10 means heat and 0 means cool
        $pub_time = date("y-m-d h:i:s",time()); // publication time
        $user_id = $_SESSION["user_id"];  
        $pax_num = $_POST["pax_num"];
        $descpt = $_POST["descpt"];
        $datetime = date("y-m-d h:i:s", $_POST["datetime"]);
        
        if($flag)
        {
            $cppaxrec_id = md5(uniqid()); // identifier

            $sql1_insert = "insert into `cppaxrec` (`cppaxrec_id`,`dept_add`,`dept_city`,`dept_prov`,`dest_add`,`dest_city`,`dest_prov`,`wechat`,`phone`,`status`,`heat`,`pub_time`,`user_id`,`pax_num`,`descpt`,`datetime`) 
            values('" . $cppaxrec_id . "','" . $dept_add . "','" . $dept_city ."','" . $dept_prov . "','" . $dest_add . "','" . $dest_city . "','" . $dest_prov . "','" . $wechat . "','" . $phone . "','" . $status . "','" . $heat . "','" . $pub_time . "','" . $user_id . "','" . $pax_num . "','" . $descpt . "','" . $datetime . "')"; 
            $res1_insert = mysqli_query($conn,$sql1_insert);

            if($res1_insert) 
            { 
                echo "<script>alert('发布成功！'); window.location.href='homepage.php';</script>"; 
            } 
            else 
            { 
                echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>"; 
            } 
        }
        
        else
        {
            $cpdriverrec_id = md5(uniqid()); // identifier

            $sql2_insert = "insert into `cpdriverrec` (`cpdriverrec_id`,`dept_add`,`dept_city`,`dept_prov`,`dest_add`,`dest_city`,`dest_prov`,`wechat`,`phone`,`status`,`heat`,`pub_time`,`user_id`,`pax_num`,`descpt`,`datetime`) 
            values('" . $cpdriverrec_id . "','" . $dept_add . "','" . $dept_city ."','" . $dept_prov . "','" . $dest_add . "','" . $dest_city . "','" . $dest_prov . "','" . $wechat . "','" . $phone . "','" . $status . "','" . $heat . "','" . $pub_time . "','" . $user_id . "','" . $pax_num . "','" . $descpt . "','" . $datetime . "')"; 
            $res2_insert = mysqli_query($conn,$sql2_insert);

            if($res2_insert) 
            { 
                echo "<script>alert('发布成功！'); window.location.href='homepage.php';</script>"; 
            } 
            else 
            { 
                echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>"; 
            }

        }
    } 
    else 
    { 
        echo "<script>alert('发布未成功！'); history.go(-1);</script>"; 
    } 
?> 