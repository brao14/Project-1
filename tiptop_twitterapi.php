<?php


// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_GET["tweet"];
echo "<h2>$tweet</h2>";
$encodedtweet = urlencode($tweet);
echo "<h2>$encodedtweet</h2>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
$result = curl_exec($curl);
curl_close($curl);
//print $result;
//$jsonresult = json_decode($result->response['response'], false);

?>
