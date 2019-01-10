<?php require_once "content/xuly.php"; 
if(isset($_GET['tap'])){
	$tap=$_GET['tap'];
}
if(!isset($tap)){
	$tap=1;
}
$hd=$arr[$tap-1];
/*$hd="https://archive.org/download/ltp-zi-o/zi-o-4.m4v";*/
if(strpos($hd,'mp4')){
	$sd=str_replace("mp4", "ogv", $hd);
}else{
	$sd=str_replace("m4v", "mp4", $hd);
}
$headers = @get_headers($sd);
?>

<video class="afterglow video" id="myvideo" width="1280" height="720" poster="<?php echo $img_movie;?>" data-skin="dark">
<?php
if(strpos($headers[8],'404') === false){?>
      <source type="video/mp4" src="<?php echo $sd;?>" />
      <source type="video/mp4" src="<?php echo $hd;?>" data-quality="hd" /> <!-- phai cung duoi file -->
<?php }else{ ?>
  <source type="video/mp4" src="<?php echo $hd;?>" />
<?php }?>
</video>