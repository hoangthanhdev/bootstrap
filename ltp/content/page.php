<div class="pagination ct" id="style-15">
	<div class="pre-scrollable">
		<?php for ($i = 1; $i <= $count_arr; $i++) {?>
	  		<a href="?ID=<?php echo $ID;?>&tap=<?php echo $i;?>#myvideo" <?php if ($i==$tap) echo "class='active'";?> class="xem"><?php echo $i;?></a>
		<?php } ?>
	</div>
</div>