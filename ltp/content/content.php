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
			<h1><?php echo $row_phim["post_title"];?></h1>
			<h2>Số tập: <?php echo $row_phim_ct["meta_value"];?></h2>
		</div>
	</div> <!-- end tieu de -->
	<div class="line">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php require_once "content/page.php"; ?>
			</div>
		</div> <!-- end ct -->
	</div>
	<div class="line">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php require_once "content/cmt.php"; ?>
			</div>
		</div>
	</div>
</div>