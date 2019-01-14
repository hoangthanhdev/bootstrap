<!-- 		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<h1><?php echo $row_phim["post_title"]." - Tập ".$tap;?></h1>
	<p>Số tập: <?php echo $row_phim_ct["meta_value"];?></p>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="alert alert-info"><span class="bold">Cập nhật:</span> 
				<?php if($count_arr>1){?>
				Tập <?php echo $so_tap." - ";?>
				<?php }?>
				<?php echo "Bản ".$ok_raw;?>
				<?php if($chat_luong_new!=NULL) {echo " - Chất lượng: ".$chat_luong_new;}?>
			</div>
		</div>
	</div>
</div> -->

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1><?php echo $row_LayInfo['post_title'];?><?php if ($SoTap>1) {?> - Tập <?php echo $tap;?><?php }?></h1>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="alert alert-info"><span class="bold">Cập nhật:</span> 
						<?php if ($SoTap>1) {?>Tập <?php echo $SoTap;?><?php }?><?php if (isset($PhienBan)) {echo $PhienBan;}?><?php if (isset($ChatLuong)) {echo $ChatLuong;}?>
					</div>
				</div>
			</div>
		</div>	