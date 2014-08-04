<?php 
	require_once('../MysqlRequest.php');

	$username = strip_tags(trim($_POST["username"]));	
	$password = strip_tags(trim($_POST["password"]));
	
	
	if($role = authentiateUser($username,$password)) {
		session_start();
		$_SESSION['status'] = true;
		$_SESSION['user_role'] = $role;
	  	header('Location: /vidme/admin');
	} 
	else {
	  echo '<div class="alert notification alert-success">Congs! Message sent successfully </div>';
	}	

?>

<?php

	

	function authentiateUser($username,$password){
		$MysqlRequest = new MysqlRequest();
		
		$result = $MysqlRequest->select(array(
			'what' => '*',
			'table' => 'from admin',
			'where' => "where username = '$username'"
		));

		$result = $result->fetch_array(MYSQLI_ASSOC);

		if($result['password'] == $password)
			return $result['role'];
		else{
			echo "password";
			return false;
		}

	}