<?php


// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_GET["tweet"];
echo ("Bharat:" . $tweet);
$encodedtweet = urlencode($tweet);
echo ("Bharat:" . $encodedtweet);
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
$result = curl_exec($curl);
curl_close($curl);
//print $result;
//$jsonresult = json_decode($result->response['response'], false);

?>
