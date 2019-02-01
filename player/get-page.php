<?php
/* Share on httzip.com 
 https://graph.facebook.com/VIDEO-ID/?fields=picture,source&access_token=EAAHdkOpkde8BAGgxC7OLjU43U2uevA7aZCgKSlrQXBi9SD8OVijY30iHYpIYbjXA1GRJP3lHfqdRxPj9WpOep7wP5HnBNlkic1NaoZBkDZA4ksF7dKCdwOi8H3r00ZCJST1mK1Yt1uLjWW9txBMukiLmzS00y4NvIDw2SGbeWZBTD5S2BkoAt
 */

$token = "EAAHdkOpkde8BAL4N98jMsZAjDtiiSRMcWaYFpd8wKImvm5niMuK2vyYTTeBNJFLnZAZBTSfrOsiybCmFHyWI1anqW1ZBuCxUZCuV3Ovne7Ns7iMqXHOZCh92V4SZBzZCmVylsdw9o4ZAROmUZCtl1A6X6brC80oKnkofBOmqNxHk44GJ42w2tXvUmJOiID8CObEXIZD"; // Paste Access Token của Video vào đây
function getVideo($id)
{
	global $token;
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://graph.facebook.com/".$id."/?fields=source,picture&access_token=".$token,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_SSL_VERIFYHOST => false
	));
	$get = curl_exec($curl);
	curl_close($curl);
	$decode = json_decode($get,JSON_UNESCAPED_UNICODE);
	$data = ["link"=>$decode["source"],"img"=>$decode["picture"]];

	return isset($decode["source"]) ? json_encode($data) : "Lỗi";
}
	echo getVideo("2317654461599520"); // Paste ID của Video vào đây
?>