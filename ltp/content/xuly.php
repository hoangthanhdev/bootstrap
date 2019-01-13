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
$count_arr=count($arr); /*lay soure link goc*/
/*echo "<pre>".print_r($json)."</pre>";*/

$sql_phim_server_1 = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='server_1'";
$result_phim_server_1 = $conn->query($sql_phim_server_1);
$row_phim_server_1 = $result_phim_server_1->fetch_assoc();
$str_server_1 = $row_phim_server_1['meta_value'];

$server_1 = explode('
', $str_server_1);
/*echo "<pre>".print_r($server_1)."</pre>";*/

$sql_so_tap = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='row'";
$result_so_tap = $conn->query($sql_so_tap);
$row_so_tap = $result_so_tap->fetch_assoc();
$so_tap= $row_so_tap['meta_value']; /*lay so tap phim hien hanh*/

$sql_chat_luong_new = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='chat-luong'";
$result_chat_luong_new = $conn->query($sql_chat_luong_new);
$row_chat_luong_new = $result_chat_luong_new->fetch_assoc();
$chat_luong_new= $row_chat_luong_new['meta_value']; /*lay chat luong phim*/

$sql_img_movie = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='img_movie'";
$result_img_movie = $conn->query($sql_img_movie);
$row_img_movie = $result_img_movie->fetch_assoc();
$img_movie= $row_img_movie['meta_value']; /*lay image movie*/

$sql_ok_raw = "
SELECT *
FROM
	`wp_postmeta`
WHERE
	`post_id` = $ID
AND `meta_key`='ok_raw'";
$result_ok_raw = $conn->query($sql_ok_raw);
$row_ok_raw = $result_ok_raw->fetch_assoc();
$ok_raw= $row_ok_raw['meta_value']; /*lay ban phim*/
if($ok_raw=="delay"){
	$ok_raw="Hoãn";
}elseif($ok_raw=="raw"){
	$ok_raw="Raw";
}else{
	$ok_raw="Vietsub";
}
?>