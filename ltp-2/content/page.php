<!-- <div class="pagination ct" id="style-15">
	<div class="pre-scrollable">
		<?php for ($i = 1; $i <= $count_arr; $i++) {?>
	  		<a href="<?php echo $link.$row_phim["post_name"].".html";?>/tap-<?php echo $i;?>" <?php if ($i==$tap) echo "class='active'";?> class="xem">
	  			<?php if($so_tap==$i && $ok_raw == "raw"){?>
	  			<?php echo $i." - ".$ok_raw;?>
	  			<?php }else echo $i;?>
	  		</a>
		<?php } ?>
	</div>
</div> -->

<div class="pagination ct" id="style-15">
	<div class="pre-scrollable">
		<?php for ($i = 1; $i <= $SoTap; $i++) {?>
	  		<a href="xem/<?php echo $data_name;?>.html/<?php echo $i;?>" <?php if ($i==$tap) echo "class='active'";?> class="xem">
	  			<?php echo $i;?>
	  		</a>
		<?php } ?>
	</div>
</div>