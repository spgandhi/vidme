<?php

	
	function isLogin(){
		if(isset($_SESSION['status']))
			if($_SESSION['user_role'] == 1)
				return true;
			else{
				return false;
			}
		else 
			return false;
	}

	function isAdmin(){
		if(isset($_SESSION['status'])){
			if($_SESSION['user_role'] == 1)
				return true;
			else 
				return false;
		}
	}

	function getVideos($num){

		$mysql = new MysqlRequest();
		$result = $mysql->select(array(
			'what' => '*',
			'table' => 'from video'
			));

		// $result = $result->fetch_array(MYSQLI_NUM);

		return $result;
	}