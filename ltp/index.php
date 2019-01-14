<?php require_once "db/db.php";
$link = 'http://'.$_SERVER['HTTP_HOST'].'/ltp/';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $title;?> - Lyta Phim</title>
	<meta name="description"  content="<?php echo $des;?>" />
	<link rel="canonical" href="<?php echo $link.$name_url.".html";?>" />

	<link rel="shortcut icon" href="https://lytaphim.com/wp-content/uploads/2013/11/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <script src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script> <!-- trinh doc video -->
	<link rel="stylesheet" href="<?php echo $link;?>1.css">
	<script type="text/javascript" src="<?php echo $link;?>1.js"></script>
</head>
<body>
<?php require_once "header/menu.php"; ?>
<?php require_once "content/content.php"; ?> 
<?php require_once "footer/footer.php"; ?>
</body>
</html>