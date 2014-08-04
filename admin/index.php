<?php
	session_start();
	include_once('admin-header.php');
	if(isLogin() && isAdmin()){

	?>	


	<? }else{
		echo "Sorry you are allowed to view this page admin";

	}

	include_once('../include/footer.php');


?>