<div class="pagination ct" id="style-15">
	<div class="pre-scrollable">
		<?php for ($i = 1; $i <= $SoTap; $i++) {?>
	  		<a href="xem/<?php echo $data_name;?>.html/<?php echo $i;?>" <?php if ($i==$tap) echo "class='active'";?> class="xem">
	  			<?php echo $i;?>
	  		</a>
		<?php } ?>
	</div>
</div>