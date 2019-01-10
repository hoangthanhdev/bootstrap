<div class="pagination ct" id="style-15">
	<div class="pre-scrollable">
		<?php for ($i = 1; $i <= $count_arr; $i++) {?>
	  		<a href="<?php echo $link.$row_phim["post_name"].".html";?>/tap-<?php echo $i;?>/#xem" <?php if ($i==$tap) echo "class='active'";?> class="xem">
	  			<?php if($so_tap==$i && $ok_raw == "raw"){?>
	  			<?php echo $i." - ".$ok_raw;?>
	  			<?php }else echo $i;?>
	  		</a>
		<?php } ?>
	</div>
</div>