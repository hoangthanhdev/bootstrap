<?php require_once "content/xuly.php"; 
if(isset($_GET['tap'])){
	$tap=$_GET['tap'];
}
if(!isset($tap)){
	$tap=1;
}
?>

<video class="afterglow video" autoplay id="myvideo" width="1280" height="720" poster="https://1.bp.blogspot.com/-wcd0TTzi44k/W2bbp5y5_iI/AAAAAAAA5kk/r3dcoVS7v0EA-EqjvHVgk_DUpRL4Wnt0ACLcBGAs/s1600/38289228_2197248486970753_4030785322206887936_o.jpg">
      <source type="video/mp4" src="<?php echo $arr[$tap-1];?>" />
</video>