<?php 
if ($data_server==1) {
	$PhimSv1=$p->Sv1($IdPhim);
	$row_PhimSv1=mysqli_fetch_assoc($PhimSv1);
	$PhimSv1=$row_PhimSv1['meta_value'];/*lay Phim Des*/
	$Sv1 = explode('
', $PhimSv1);
}

	if ($data_server==2 || $data_server==3) {

		$PhimImg=$p->ImgMovie($IdPhim);
		$row_PhimImg=mysqli_fetch_assoc($PhimImg);
		$PhimImg=$row_PhimImg['meta_value'];/*lay Hinh Phim*/		

		$PhimSv2=$p->Sv2($IdPhim);
		$row_PhimSv2=mysqli_fetch_assoc($PhimSv2);
		$PhimSv2=$row_PhimSv2['meta_value'];/*lay Phim Des*/
		$Sv2 = explode('
', $PhimSv2);
		$count_Sv2=count($Sv2);

		if ($count_Sv2>=$tap) {
			$hd=$Sv2[$tap-1];
			if(strpos($hd,'mp4')){
				$sd=str_replace("mp4", "ogv", $hd);
			}else{
				$sd=str_replace("m4v", "mp4", $hd);
			}
			$headers = @get_headers($sd);
		}
} ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php if($data_server==2){?>
		<video class="afterglow video" id="myvideo" width="1280" height="720" poster="<?php echo $PhimImg;?>" data-skin="dark">
		<?php
		if(strpos($headers[8],'404') === false){?>
		      <source type="video/mp4" src="<?php echo $sd;?>" />
		      <source type="video/mp4" src="<?php echo $hd;?>" data-quality="hd" />
		<?php }else{ ?>
		  <source type="video/mp4" src="<?php echo $hd;?>" />
		<?php }?> 
		</video>
		<?php if($count_Sv2<$tap){echo "<p class='text-center'>Phim đang được cập nhật. Bạn vui lòng quay lại sau. Cám ơn</p>";}?>
	<?php } ?>

	<?php if($data_server==1){?>
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="<?php echo $Sv1[$tap-1]?>" allowfullscreen></iframe>
		</div>
	<?php }?>

	<?php if($data_server==3){?>
		<script type="text/javascript" src="jwplayer.js"></script>
		<div id="sv3">Phim đang tải, nếu sau 5s bạn chưa xem được phim vui lòng load lại. Cám ơn</div>
		<script type="text/javascript">
		jwplayer.key="IuQYEqnj94czS8G8iRJIz8e3fQXdDBLEn1Uvo5JB6bFVwwuJVWnxNTrFP94=";
		var playerInstance = jwplayer("sv3");

		playerInstance.setup({
			<?php if(strpos($headers[8],'404') === false){?>
			sources: [
				{file: "<?php echo $hd;?>",label: "720p HD"},
				{file: "<?php echo $sd;?>",label: "360p SD","default": "true"}
			],
			<?php }else{ ?>
				file: "<?php echo $hd;?>",
			<?php }?>
		    image: "<?php echo $PhimImg;?>",
		    width: "100%",
		    autostart: 'true',
		    aspectratio: "16:9",

			});
		</script>
	<?php }?>
	</div>
</div>

<div class="row server">
	<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-push-2 col-md-push-3 col-lg-push-3">
		<div class="btn-group btn-group-lg">
		    <a href="xem/<?php echo $data_name;?>.html/<?php echo $tap;?>&server=1" title="Server 1" class="btn btn-primary <?php if($data_server==1) echo "disabled"?>"><?php if($data_server==1) echo "Bạn đang xem - "?>Server 1</a>
		    <a href="xem/<?php echo $data_name;?>.html/<?php echo $tap;?>&server=2" title="Server 2" class="btn btn-primary <?php if($data_server==2) echo "disabled"?>"><?php if($data_server==2) echo "Bạn đang xem - "?>Server 2</a>
		    <a href="xem/<?php echo $data_name;?>.html/<?php echo $tap;?>&server=3" title="Server 2" class="btn btn-primary <?php if($data_server==3) echo "disabled"?>"><?php if($data_server==3) echo "Bạn đang xem - "?>Server 3</a>
		  </div>
	</div>
</div>
