<html>
<head>
<title>Start Auto Download file</title>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(function() {
$('a[data-auto-download]').click(function(){
var $this = $(this);
setTimeout(function() {
window.location = $this.attr('href');
}, 2000);
});
});
</script>
</head>
<body>
<div class="wrapper">
<p>The download should start shortly. If it doesn't, click
<a data-auto-download href="../soure-chuan.zip">https://archive.org/download/ltp-zi-o/zi-o-1.mp4</a></p>
</div>
</body>
</html>