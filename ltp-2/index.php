<?php
require_once "classDB.php";
require_once "classPhim.php";
if(isset($d)==false) $d = new db;
if(isset($p)==false) $p = new phim;

if (isset($_GET['view'])) {
	$view=$_GET['view'];
}else{
	$view='';
}
if (isset($_GET['server'])) {
	$data_server=$_GET['server'];
}else{
	$data_server='1';
}
if (isset($_GET['name'])) {
	$data_name=$_GET['name'];

	$LayInfo=$d->LayInfo($data_name);
	$row_LayInfo=mysqli_fetch_assoc($LayInfo);
	$IdPhim=$row_LayInfo['ID']; /*lay id phim*/
	$NamePhim=$row_LayInfo['post_name']; /*lay name phim*/

	if($NamePhim!=$data_name){
		header('Location: /404.html');
	}

	$PhimTile=$p->PhimTile($IdPhim);
	$row_PhimTile=mysqli_fetch_assoc($PhimTile);
	$PhimTile=$row_PhimTile['meta_value'];/*lay Phim Tile*/

	$PhimDes=$p->PhimDes($IdPhim);
	$row_PhimDes=mysqli_fetch_assoc($PhimDes);
	$PhimDes=$row_PhimDes['meta_value'];/*lay Phim Des*/

	if (isset($_GET['tap'])) {
		$tap=$_GET['tap'];
	}else{
		$tap=1;
	}
	$SoTap=$p->SoTap($IdPhim);
	$row_SoTap=mysqli_fetch_assoc($SoTap);
	$SoTap=$row_SoTap['meta_value'];/*lay Phim Des*/

	$PhienBan=$p->PhienBan($IdPhim);
	$row_PhienBan=mysqli_fetch_assoc($PhienBan);
	$PhienBan=$row_PhienBan['meta_value'];/*lay Chat Luong Phim*/
	if($PhienBan=='ok'){$PhienBan=' - Vietsub';}
	elseif($PhienBan=='raw'){$PhienBan=' - Raw';}
	elseif($PhienBan=='delay'){$PhienBan=' - Hoãn';}

	$ChatLuong=$p->ChatLuong($IdPhim);
	$row_ChatLuong=mysqli_fetch_assoc($ChatLuong);
	$ChatLuong=$row_ChatLuong['meta_value'];/*lay Chat Luong Phim*/
	if($ChatLuong=='Cam'){$ChatLuong=' - Bản Cam';}
	elseif($ChatLuong=='SD'){$ChatLuong=' - Bản SD';}
	elseif($ChatLuong=='HD'){$ChatLuong=' - Bản HD';}
	elseif($ChatLuong==NULL){$ChatLuong=NULL;}
}else{
	$data_name=NULL;
}
/*$base="http://".$_SERVER['SERVER_NAME'].":8080/ltp-2/";*/
$base="http://".$_SERVER['SERVER_NAME']."/ltp-2/";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<base href="<?php echo $base;?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(isset($PhimTile)){echo $PhimTile;}else echo("Xem phim online miễn phí - không quảng cáo - link nhanh nhất | Lyta Phim")?></title>
	<meta name="description"  content='<?php if(isset($PhimDes)){echo $PhimDes;}else echo("Lyta Phim nơi xem phim online miễn phí KHÔNG quảng cáo phản cảm, KHÔNG popup, Link Youtube nhanh KHÔNG cần chờ đợi. Lyta Phim thỏa sức đam mê của bạn.") ?>' />
	
	<?php 	if($view==''){?>
		<link rel="canonical" href="<?php echo $base;?>" />
	<?php }elseif($view=='xem'){?>
		<link rel="canonical" href="<?php echo $base.'xem/'.$data_name.'.html';?>" />
	<?php }?>
	<link rel="shortcut icon" href="https://lytaphim.com/wp-content/uploads/2013/11/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<?php if($data_server==2) {?>
  <script src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script> <!-- trinh doc video -->
<?php }?>
	<link rel="stylesheet" href="1.css">
	<script type="text/javascript" src="1.js"></script>
	<?php require_once "code.php"; ?>
</head>
<body>
<?php require_once "header/header.php"; ?>
<?php 	if($view=='') 		 include "content/home.php";
		/*elseif($view=='ok')  include "content/home.php";*/
		elseif($view=='xem') include "content/xem.php";
		elseif($view=='404') include "content/404.php";
?>       
<?php require_once "footer/footer.php"; ?>
</body>
</html>
