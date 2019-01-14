<?php $breadcrumb=$p->TagPhim($IdPhim);
$row_breadcrumb=mysqli_fetch_assoc($breadcrumb);
?>
<ol class="breadcrumb" id="xem">
    <li class="breadcrumb-item"><a href="/" target="_plank">Trang Chủ</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
    <li class="breadcrumb-item"><a href="https://lytaphim.com/tag/<?php echo $row_breadcrumb['slug'];?>" target="_plank"><?php echo $row_breadcrumb['name'];?></a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
    <li class="breadcrumb-item active"><?php echo $row_LayInfo['post_title'];?></li>
</ol>