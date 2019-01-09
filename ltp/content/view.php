<?php require_once "content/xuly.php"; 
if(isset($_GET['tap'])){
	$tap=$_GET['tap'];
}
if(!isset($tap)){
	$tap=1;
}
?>

<video class="afterglow video" id="myvideo" width="1280" height="720" poster="https://scontent.fsgn5-7.fna.fbcdn.net/v/t1.0-9/49246579_2075824582509893_397722123457527808_o.jpg?_nc_cat=103&_nc_ht=scontent.fsgn5-7.fna&oh=1808737c34b6dc8fa51574689fe66cd4&oe=5CC121F7" data-skin="dark">
      <source type="video/mp4" src="<?php echo $arr[$tap-1];?>" />
      <source type="video/mp4" src="<?php echo $arr[$tap+1];?>" data-quality="hd" /> <!-- phai cung duoi file -->
</video>
<?php echo $arr[$tap-1];?>