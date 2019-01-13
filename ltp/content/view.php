<?php require_once "content/xuly.php";

if(isset($_GET['server'])){
	$data_server=$_GET['server'];
}
if(!isset($_GET['server'])){
	$data_server=1;
}
if(isset($_GET['tap'])){
	$tap=$_GET['tap'];
}
if(!isset($tap)){
	$tap=1;
}
if($data_server==1){
	$s1=$server_1[$tap-1];
}
/*$hd="https://archive.org/download/ltp-zi-o/zi-o-4.m4v";*/
if($data_server==2){
	$hd=$arr[$tap-1];
	if(strpos($hd,'mp4')){
		$sd=str_replace("mp4", "ogv", $hd);
	}else{
		$sd=str_replace("m4v", "mp4", $hd);
	}
	$headers = @get_headers($sd);
}
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php if($data_server==2){?>
		<video class="afterglow video" id="myvideo" width="1280" height="720" poster="<?php echo $img_movie;?>" data-skin="dark">
		<?php
		if(strpos($headers[8],'404') === false){?>
		      <source type="video/mp4" src="<?php echo $sd;?>" />
		      <source type="video/mp4" src="<?php echo $hd;?>" data-quality="hd" /> phai cung duoi file
		<?php }else{ ?>
		  <source type="video/mp4" src="<?php echo $hd;?>" />
		<?php }?>
		</video>
	<?php } ?>
	<?php if($data_server==1){?>
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="<?php echo $s1;?>" allowfullscreen></iframe>
		</div>
	<?php }?>
	</div>
</div>

<div class="row server">
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-sm-push-2 col-md-push-3 col-lg-push-4">
		<div class="btn-group btn-group-lg">
		    <a href="<?php echo $link.$row_phim["post_name"].".html";?><?php if(isset($tap)){echo "/tap-".$tap;}?>/s1" title="Server 1" class="btn btn-primary <?php if($data_server==1) echo "disabled"?>"><?php if($data_server==1) echo "Bạn đang xem - "?>Server 1</a>
		    <a href="<?php echo $link.$row_phim["post_name"].".html";?><?php if(isset($tap)){echo "/tap-".$tap;}?>/s2" title="Server 2" class="btn btn-primary <?php if($data_server==2) echo "disabled"?>"><?php if($data_server==2) echo "Bạn đang xem - "?>Server 2</a>
		  </div>
	</div>
</div>

