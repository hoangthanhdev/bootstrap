<div class="container breadcrumb">
	<div class="row">
		<div class="hidden-xs col-sm-12 col-md-12 col-lg-12">
		<?php require_once "content/breadcrumb.php"; ?>
		</div>
	</div>
</div>
<!-- end breadcrumb -->
<div class="container view">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php require_once "content/view.php"; ?>
		</div>
	</div>
</div>
<!-- end view -->
<div class="container text-center">
	<img src="https://www.thuvienaz.net/wp-content/themes/dooplay/images/banner-home.jpg" alt="" class="img-responsive">
</div>
<div class="container info">
	<div class="row tieude">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1><?php echo $row_phim["post_title"]." - Tập ".$tap;?></h1>
			<!-- <p>Số tập: <?php echo $row_phim_ct["meta_value"];?></p> -->
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<div class="alert alert-info"><span class="bold">Cập nhật:</span> 
						<?php if($count_arr>1){?>
						Tập <?php echo $so_tap." - ";?>
						<?php }?>
						<?php echo "Bản ".$ok_raw;?>
						<?php if($chat_luong_new!=NULL) {echo " - Chất lượng: ".$chat_luong_new;}?>
					</div>
				</div>
			</div>
			
		</div>
	</div> <!-- end tieu de -->
<?php if($count_arr>1){?>
	<div class="line">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php require_once "content/page.php"; ?>
			</div>
		</div> <!-- end ct -->
	</div>
<?php }?>
	<div class="line">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php require_once "content/cmt.php"; ?>
			</div>
		</div>
	</div>
</div>