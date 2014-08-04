<?php

	require_once('../MysqlRequest.php');
	$name = $_POST['video-name'];
	$id = $_POST['video-id'];
	$category = $_POST['category'];
	$featured = $_POST['featured'];

	$Mysql = new MysqlRequest();

	$result = $Mysql->insert(array(
		'into' => "into video",
		'set' => "(name,id,category,featured) VALUES ('$name','$id','$category','$featured')"
		));

	if($result)
		header('Location:add-video-form.php');
	else
		echo "sorry. there was an error";

?>
