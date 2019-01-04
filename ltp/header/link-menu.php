<li class="dropdown">
	<a href="/the-loai" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<b class="caret"></b></a>
	<ul class="dropdown-menu">
		<?php while($row_menu_con1 = $result_menu_con1->fetch_assoc()){?>
			<li><a href="<?php echo $row_menu_con1["slug"];?>"><i class="fas fa-caret-right"></i><?php echo $row_menu_con1["name"];?></a></li>
		<?php }?>
	</ul>
</li>
<li class="dropdown">
	<a href="/the-loai" class="dropdown-toggle" data-toggle="dropdown">Thể Loại<b class="caret"></b></a>
	<ul class="dropdown-menu">
		<?php while($row_menu_con2 = $result_menu_con2->fetch_assoc()){?>
			<li><a href="<?php echo $row_menu_con1["slug"];?>"><i class="fas fa-caret-right"></i><?php echo $row_menu_con2["name"];?></a></li>
		<?php }?>
	</ul>
</li>
<li><a href="/sieu-nhan-phim-le"><li><a href="#">Phim lẻ Siêu Nhân</a></li></a></li>
<li><a href="/sieu-nhan-phim-bo"><li><a href="#">Phim Bộ Siêu Nhân</a></li></a></li>