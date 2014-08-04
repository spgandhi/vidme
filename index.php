<html>
<head>
	<link type="text" href="style.css" rel="stylesheet">
	<title>VidMe</title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="include/swfobject.js"></script>
	<script type="text/javascript" src="overlay.js"></script>
	<script type="text/javascript" src="homescript.js"></script>

	<?php 
		require_once('include/functions.php');
	 	require('MysqlRequest.php');
		
		$videos = getVideos(10);
	 ?>
</head>
<body id="mainbody">

	<!-- Head -->
	<div id="header-wrapper">
		<div id="title">
			<img src="images/logo.png">
		</div>
		<hr>
	</div> <!-- End of Head -->

	<!-- Video Box -->
	<div class="video-box">

		<div class="video-player">

			<div class="wait" style="display:none;">
				<div id="countdown"></div>
			</div>

			<div id="ytplayer">
				<p>You will need Flash 8 or better to view this content.</p>
			</div>

		</div>

		<div class="suggested-videos">
			<ul>
				<?php
					while($row = $videos->fetch_array(MYSQLI_NUM)){
				?>
					<li >
						<div>
							
							<img src="http://img.youtube.com/vi/<?php echo $row[1]; ?>/1.jpg" class="suggested-video-thumbnail">
							<div class="img-overlay">text</div>
							<a href="#" onclick="newVideo(<?php echo "'".$row[1]."'"; ?>);" class="suggested-video-title"><?php echo substr($row[0],0,50); ?></a>
							<!-- <button onclick="newVideo(<?php echo "'".$row[1]."'"; ?>);">Play</button> -->
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>

	</div>

	<!-- <div id="suggested-video">
		<ul>
			<?php
				while($row = $videos->fetch_array(MYSQLI_NUM)){
			?>
				<li>
					<div>
						<img src="http://img.youtube.com/vi/<?php echo $row[1]; ?>/1.jpg">
						<button onclick="newVideo(<?php echo "'".$row[1]."'"; ?>);">Play</button>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div> -->



<script type="text/javascript">
$('.suggested-video-thumbnail').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.8
});
</script>

</body>
</html>
