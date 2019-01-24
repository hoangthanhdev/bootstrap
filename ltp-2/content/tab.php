<?php
	$PhimNoiDung=$p->NoiDung($IdPhim);
	$row_PhimNoiDung=mysqli_fetch_assoc($PhimNoiDung);
	$PhimNoiDung=$row_PhimNoiDung['meta_value'];/*lay Phim Des*/

	$PhimTrailer=$p->Trailer($IdPhim);
	$row_PhimTrailer=mysqli_fetch_assoc($PhimTrailer);
	$PhimTrailer=$row_PhimTrailer['meta_value'];/*lay Phim Des*/
?>
<div class="tab-p">
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li><a href="#noidung" role="tab" data-toggle="tab">NỘI DUNG PHIM</a></li>
  <li><a href="#trailer" role="tab" data-toggle="tab">TRAILER PHIM</a></li>
  <li class="active"><a href="#xp" role="tab" data-toggle="tab">XEM PHIM</a></li>
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane" id="noidung">
	<h2>nội dung phim - <?php echo $row_LayInfo['post_title'];?></h2>
  	<?php echo $PhimNoiDung;?>
  </div> <!-- end tab 1 -->
  <div class="tab-pane" id="trailer">
  	<h2>trailer - <?php echo $row_LayInfo['post_title'];?></h2>
  	<div class="embed-responsive embed-responsive-16by9">
  		<iframe class="embed-responsive-item" src="<?php echo $PhimTrailer;?>?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  	</div>
  </div><!-- end tab 2 -->
  <div class="tab-pane active" id="xp">
  	<h2><?php echo $row_LayInfo['post_title'];?><?php if ($SoTap>1) {?> - Tập <?php echo $tap;?><?php }?></h2>
  	<?php require_once "content/view.php"; ?>
  <div class="row tieude">
    <?php require_once "content/info.php"; ?>
  </div> <!-- end tieu de -->
  <?php if ($SoTap>1) {?>
  <div class="line">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php require_once "content/page.php"; ?>
      </div>
    </div> <!-- end ct -->
  </div>
  <?php }?>
  </div><!-- end tab 3 -->
</div>
</div>
