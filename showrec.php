<!DOCTYPE html>
<html>
<head>
    <title>show database</title>
</head>
<body>
<table style='text-align:left;' border='1'>
         <tr><th>user_id</th><th>username</th></tr>
    <?php
        header("Content-Type:text/html;charset=utf-8");

        $conn = mysqli_connect("localhost","root","");//数据库帐号密码为安装数据库时设置
        if(mysqli_errno($conn))
        {
            echo mysqli_errno($conn);
            exit;
        }
        mysqli_select_db($conn,"userdb"); 
        mysqli_set_charset($conn,'utf8'); 

        $sql = "select user_id, username from user"; 
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $num = mysqli_num_rows($result);
        $data = array();

        class User
        {
            public $user_id;
            public $username;
        }

        if($num) 
        { 
            // session_start();

            for($i=0; $i<$num; $i++){
                $user = new User();
                $user->user_id = $row['user_id'];
                $user->username = $row['username'];
                $data[]=$user;
                // echo "<tr><td>$user_id</td><td>$username</td></tr>";
            }
            $json = json_encode($data);
             echo "<script>
                   var str=$json;                   
                   </script>";
        }else{
            echo "failed";
        }
    ?>
</table>

<div class="box">
    <form action="/bytheway/paxpubrec.html" method="post"> 
        <table>
            <tr>
                <td colspa="2" align="right"><input type="submit" name="submit" value="我要发布"/></td>
            </tr>
         </table>
    </form>
</div>
<script type="text/javascript">
    
alert(str);

</script>
</body>
</html>