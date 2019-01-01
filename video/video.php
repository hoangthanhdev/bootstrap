<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test video Player</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="//vjs.zencdn.net/7.0/video-js.min.css" rel="stylesheet">
		<script src="//vjs.zencdn.net/7.0/video.min.js"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			/* Change all text and icon colors in the player. */
.vjs-matrix.video-js {
  color: #00ff00;
}

/* Change the border of the big play button. */
.vjs-matrix .vjs-big-play-button {
  border-color: #00ff00;
}

/* Change the color of various "bars". */
.vjs-matrix .vjs-volume-level,
.vjs-matrix .vjs-play-progress,
.vjs-matrix .vjs-slider-bar {
  background: #00ff00;
}
.bg{
	background-color: #000;
}
		</style>
		<script type="text/javascript">
			var player = videojs('my-player');

			player.addClass('vjs-matrix');

		</script>
	</head>
	<body>
		<h1 class="text-center">Video.js</h1>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>

 		<div class="container-fluid bg">
 			<div class="container">
 				<div class="row">
 					<video
					 id="my-player"
					 class="vjs-matrix video-js col-md-12"
					 controls
					 preload="auto"
					 poster="//vjs.zencdn.net/v/oceans.png"
					 data-setup='{"controls": true, "autoplay": false, "preload": "auto"}'>
					 <source src="https://archive.org/download/KRGhost/Ghost-49.mkv" type="video/mp4"></source>
					 <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
					 <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
					 <p class="vjs-no-js">
					 To view this video please enable JavaScript, and consider upgrading to a web browser that
					 <a href="http://videojs.com/html5-video-support/" target="_blank">
					 supports HTML5 video
					 </a>
					 </p>
				</video>
 				</div>
 				
 			</div>
 		</div>
	</body>
</html>