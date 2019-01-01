<div class="pagination ct" id="style-15">
	<div class="pre-scrollable">
		<?php for ($i = 1; $i <= $count_arr; $i++) {?>
	  		<a href="?tap=<?php echo $i;?>" <?php if ($i==$tap) echo "class='active'";?>><?php echo $i;?></a>
		<?php } ?>
	</div>
</div>