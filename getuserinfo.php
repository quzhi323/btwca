<?php 
//登录处理界面 logincheck.php
//判断是否按下提交按钮
			session_start();
            $user_id =   $_SESSION['user_id'];
            $username =   $_SESSION['username'];

            class userinfo
            {
            	public $user_id;
            	public $username;
            }

   //      	print("<html><b>");
			// $sid = session_id();
			// print("Session ID returned by session_id(): ".$sid."\n");

			// $user_id = $_SESSION["user_id"];
			// $username = $_SESSION["username"];
			// print("user_id: ".$user_id."\n");
			// print("username: ".$username."\n");
			// print("</b></html>\n");


			$user = new userinfo();
			$user->user_id = $_SESSION['user_id'];
			$user->$username = $_SESSION['username'];
			$data_user[]=$user;
			$json_user = json_encode($data_user);
			echo "<script> var user = $json_user ; alert(user[0].user_id)</script>";


 
?> 