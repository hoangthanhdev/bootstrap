<?php
$url = "https://archive.org/download/test-soft/LP01.m4v";
$headers = @get_headers($url);
?>
<pre>
	<?php print_r($headers);?>
</pre>
<?php
if(strpos($headers[8],'404') === false)
{
  echo "URL OK";
}
else
{
  echo "URL CHET NGAT";
}
?>

