<?php
//登录处理界面 logincheck.php
//判断是否按下提交按钮
		// session_start();
		if(isset($_SESSION['user_id']))
		{
    		// $user = $_SESSION['user_id'];
    		// $user_id =   $_SESSION['user_id'];
      //   	$username =   $_SESSION['username'];

        	class userinfo
        	{
        		public $user_id;
        		public $username;
        	}

			$user = new userinfo();
			$user->user_id = $_SESSION['user_id'];
			$user->username = $_SESSION['username'];
			$data_user[]=$user;
			$json_user = json_encode($data_user);
			echo "<script> var user = $json_user ; alert(user[0].username);</script>";
		}
		else
		{
		}



		// print("<html><b>");
		// $user_id = $_SESSION["user_id"];
		// print("Value of mysite has been retrieved: ".$user_id."\n");
		// $username = $_SESSION["username"];
		// print("Value of mysite has been retrieved: ".$username."\n");
		// print("</b></html>\n");

?> 