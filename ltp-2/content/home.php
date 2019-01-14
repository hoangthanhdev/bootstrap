<?php $PhimDuyet=$d->PhimDuyet();?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>DANH SÁCH PHIM ĐÃ CẬP NHẬT MỚI</h2>          
			  <table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Tên Phim</th>
			        <th>Xem phim</th>
			        <th>Download</th>
			      </tr>
			    </thead>
			    <tbody>
			<?php while($row_PhimDuyet=mysqli_fetch_assoc($PhimDuyet)) {?>
			      <tr>
			        <td><?php echo $row_PhimDuyet['post_title'];?></td>
			        <td><a href="xem/<?php echo $row_PhimDuyet['post_name']?>.html" target="_blank">Vào xem</a> </td>
			        <td><a href="#">Đang cập nhật ...</a></td>
			      </tr>
			<?php }?>
			    </tbody>
			  </table>
		</div>
	</div>
</div>