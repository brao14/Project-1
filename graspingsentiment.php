<?php
require_once('graspingtweets.php');


function sentimentReturn()
{
$tweet=tweetReturn();

$encodedtweet = urlencode($tweet);
// echo "<br> Encoded tweet = $encodedtweet <br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$ar = json_decode($result);

return $ar;
}


?>
