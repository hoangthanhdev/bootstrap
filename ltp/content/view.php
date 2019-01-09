<?php require_once "content/xuly.php"; 
if(isset($_GET['tap'])){
	$tap=$_GET['tap'];
}
if(!isset($tap)){
	$tap=1;
}
?>

<video class="afterglow video" id="myvideo" width="1280" height="720" poster="<?php echo $img_movie;?>" data-skin="dark">
      <source type="video/mp4" src="<?php echo $arr[$tap-1];?>" />
      <!-- <source type="video/mp4" src="<?php echo $arr[$tap+1];?>" data-quality="hd" /> phai cung duoi file -->
</video>