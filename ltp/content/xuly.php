<?php
$sql_phim_soure = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='soure'";
$result_phim_soure = $conn->query($sql_phim_soure);
$row_phim_soure = $result_phim_soure->fetch_assoc();

$str= $row_phim_soure['meta_value'];
$arr = explode('
', $str);
$json=json_encode($arr);
$count_arr=count($arr);
?>