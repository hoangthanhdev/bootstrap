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
  <li class="active"><a href="#noidung" role="tab" data-toggle="tab">NỘI DUNG PHIM</a></li>
  <li><a href="#trailer" role="tab" data-toggle="tab">TRAILER PHIM</a></li>
</ul>
</li>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="noidung">
	<h2>nội dung phim - <?php echo $row_LayInfo['post_title'];?></h2>
  	<?php echo $PhimNoiDung;?>
  </div> <!-- end tab 1 -->
  <div class="tab-pane" id="trailer">
  	<h2>trailer - <?php echo $row_LayInfo['post_title'];?></h2>
  	<div class="embed-responsive embed-responsive-16by9">
  		<iframe class="embed-responsive-item" src="<?php echo $PhimTrailer;?>?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  	</div>
  </div><!-- end tab 2 -->
</div>
</div>
