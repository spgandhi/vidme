<?php
	include_once('admin-header.php');
	if(!isLogin() || !isAdmin()){
		header('Location :login.php?message=!login');
	}
?>

<form id="add-video" action="add-video.php" method="POST">
	<input type="text" name="video-name" placeholder="Video Name">
	<input type="text" name="video-id" placeholder="Video ID">
	
	<select name="category">
	  <option value="fun">Fun</option>
	  <option value="life">Life</option>
	  <option value="emotional">Emotional</option>
	  <option value="social">Social</option>
	</select>
	<input type="checkbox" value="1" name="featured">
	<input type="submit" name="submit" value="Add">
</form>

<?php
	include_once('../include/footer.php');