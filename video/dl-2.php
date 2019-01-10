<?php
$psp = "https://archive.org/download/ltp-zi-o/zi-o-1.mp4";
// We'll be outputting a video
header('Content-type: video/mp4');

// It will be called video.flv
header('Content-Disposition: attachment; filename="zi-o-1.mp4"');

// The PDF source is in original.flv
readfile('https://archive.org/download/ltp-zi-o/zi-o-1.mp4');
?>