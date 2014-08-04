$(document).ready(function(){
	var params = { allowScriptAccess: "always" };

	swfobject.embedSWF(

		"http://www.youtube.com/v/d8me1GXijJA&enablejsapi=1&playerapiid=ytplayer", "ytplayer", "750", "475", "8", null, null, params);
});

// Other Videos
function newVideo(id){
	
	var params = { allowScriptAccess: "always" };
	var video = "http://www.youtube.com/v/";
		video += id;
		video += "&enablejsapi=1&playerapiid=ytplayer&autoplay=1&theme=light";
	swfobject.embedSWF(

		video, "ytplayer", "750", "475", "8", null, null, params);

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
$('#d1').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.8
});

// function imageOverlay(){
	
// 	$( ".suggested-video-title" ).hover(
//   function() {
//     $( this ).append( $( "<span> ***</span>" ) );
//   }, function() {
//     $( this ).find( "span:last" ).remove();
//   }
// );

	
// }

