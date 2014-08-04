<?php
	session_start();
  require_once('../include/functions.php');
	if(!isLogin() || !isAdmin()){
    header('Location : login.php?message=!login');
  }
  include_once('admin-header.php');
  require_once('../MysqlRequest.php');
	

?>

<?php
  $videos = getVideos(10);

?>
<table class="flatTable">
  <tr class="titleTr">
    <td class="titleTd">TABLE TITLE</td>
    <td colspan="4"></td>
    <td class="plusTd button"></td>
  </tr>
  <tr class="headingTr">
    <td>No</td>
    <td>ID</td>
    <td>URL</td>
    <td>Views</td>
    <td>Likes</td>
    <td>Settings</td>
  </tr>
<?php $num =0 ?>
<?php while($row = $videos->fetch_array(MYSQLI_NUM)){ ?>
  <tr>
    <td><?php echo ++$num; ?></td>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td>White Out</td>
    <td>$2,000</td>
    <td class="controlTd">
      <div class="settingsIcons">
        <span class="settingsIcon"><img src="http://i.imgur.com/nnzONel.png" alt="X" /></span>
        <span class="settingsIcon"><img src="http://i.imgur.com/UAdSFIg.png" alt="placeholder icon" /></span>
        <div class="settingsIcon"><img src="http://i.imgur.com/UAdSFIg.png" alt="placeholder icon" /></div>
      </div>  
    </td>
  </tr>
<?php } ?>
</table>

<div id="sForm" class="sForm sFormPadding">
        <span class="button close"><img src="http://i.imgur.com/nnzONel.png" alt="X"  class="" /></span>
        <h2 class="title">Add a New Record</h2>  
        <div class="result">
          <form id="add-video">
            <input type="text" name="video-name" placeholder="Video Name">
            <input type="text" name="video-id" placeholder="Video ID">
            <select name="category">
              <option value="fun">Fun</option>
              <option value="life">Life</option>
              <option value="emotional">Emotional</option>
              <option value="social">Social</option>
            </select>
            <input type="checkbox" value="1" name="featured">
            <input type="submit" name="submit" value="Add" class="submit">
          </form>
        </div>
    </div>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<script>
$(".plusTd").click(function () {
  $("#sForm").toggleClass("open");
});

$(".close").click(function(){
	$("#sForm").toggleClass("open");
})

$(".controlTd").click(function () {
  $(this).children(".settingsIcons").toggleClass("display"); 
  $(this).children(".settingsIcon").toggleClass("openIcon"); 
});

</script>

<script type="text/javascript">
  $( ".submit" ).click(function( event ) {
    
    $.post( "add-video.php", { func: "getNameAndTime" },function( data ) {
 
  alert('h');
});
  
  });
</script>
