<?php 
$sql_phim = "
SELECT
	ID,
	post_status,
	post_name,
	post_title
FROM
	`wp_posts`
WHERE
	`ID` = $ID";
$result_phim = $conn->query($sql_phim);
$row_phim = $result_phim->fetch_assoc();

$sql_phim_ct = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='so-tap-phim-bo'";
$result_phim_ct = $conn->query($sql_phim_ct);
$row_phim_ct = $result_phim_ct->fetch_assoc();

?>
<ol class="breadcrumb" id="xem">
    <li class="breadcrumb-item"><a href="https://lytaphim.com/" target="_plank">Trang Chủ</a><i class="fa fa-angle-double-right mx-2" aria-hidden="true"></i></li>
    <li class="breadcrumb-item active"><?php echo $row_phim["post_title"];?></li>
</ol>