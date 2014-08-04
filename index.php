<html>
<head>
	<link type="text" href="style.css" rel="stylesheet">
	<title>VidMe</title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="include/swfobject.js"></script>
	<?php 
		require_once('include/functions.php');
		require('MysqlRequest.php');

	 ?>
</head>
<body id="mainbody">
	<div id="header-wrapper">
		<div id="title">
			<h1>VidMe</h1>
		</div>
		<hr>
	</div>

	<div class="video-player">
		<div class="wait" style="display:none;">
			<div id="countdown"></div>
		</div>
		<div id="ytplayer">

			<p>You will need Flash 8 or better to view this content.</p>
		</div>
	</div>

	<div id="suggested-video">
		<?php
			$videos = getVideos(10);
		?>

		<ul>
			<?php
				while($row = $videos->fetch_array(MYSQLI_NUM)){
			?>
				<li >
					<div>
						<img src="http://img.youtube.com/vi/<?php echo $row[1]; ?>/1.jpg">
						<button onclick="newVideo(<?php echo "'".$row[1]."'"; ?>);">Play</button>
					</div>
				</li>
			<?php } ?>
	</div>


<script type="text/javascript">

// First Video
$(document).ready(function(){
	var params = { allowScriptAccess: "always" };

	swfobject.embedSWF(

		"http://www.youtube.com/v/d8me1GXijJA&enablejsapi=1&playerapiid=ytplayer", "ytplayer", "425", "365", "8", null, null, params);
});

// Other Videos
function newVideo(id){
	
	var params = { allowScriptAccess: "always" };
	var video = "http://www.youtube.com/v/";
		video += id;
		video += "&enablejsapi=1&playerapiid=ytplayer&autoplay=1&theme=light";
	swfobject.embedSWF(

		video, "ytplayer", "425", "365", "8", null, null, params);

		onYouTubePlayerReady('ytplayer');
		$(".wait").css({
			display: 'none',
		});

}

  function onYouTubePlayerReady(playerId) {
      ytplayer = document.getElementById(playerId);
      ytplayer.addEventListener("onStateChange", "onytplayerStateChange");
    }


function onytplayerStateChange(newState) {
   if(newState==0){
   		i=10;

		$(".wait").css({
			display: 'block',
		});

		setInterval(function () {
	    	showCountDown(i--);
		}, 1000);
	}
}

function showCountDown(timer){
	var countdown = document.getElementById("countdown");
	countdown.innerHTML = "Next Video Starts In " + timer;
	if(timer==0){
		newVideo('5fI3zz2cp3k');
	}
}


</script>

</body>
</html>
