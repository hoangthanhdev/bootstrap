<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.bg{
				background: #000000ad;
			}
			.videowrapper{
			  position:relative;
			  height: auto;
			}
		</style>
		<script type="text/javascript">
				var lastposition = 0;

				afterglow.on('myvideo', "before-lightbox-close", function(event) {
				  // Store the playback time
				  lastposition = event.player.currentTime();
				});

				afterglow.on('myvideo', "ready", function(event) {
				  // Load the playback time
				  event.player.currentTime(lastposition);
				});
		</script>
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>
		<div class="container-fluid bg">
 			<div class="container text-center">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a class="afterglow" href="#myvideo">Launch lightbox</a>
					 	<video id="myvideo" width="1280" height="720">
					      <source type="video/mp4" src="https://ia902807.us.archive.org/12/items/KamenRiderXKamenRiderWDecadeMovieWars2010/Kamen%20Rider%20%C3%97%20Kamen%20Rider%20W%20%26%20Decade%20-%20Movie%20Wars%202010.mp4"/>
					      <div style="float: left;">adadsd</div>
					    </video>

				</div>
			</div>
		</div>		
 		</div>
	</body>
</html>



