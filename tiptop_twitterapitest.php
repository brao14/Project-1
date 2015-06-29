

<?php
// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_GET["tweet"];
echo "<html>";
echo "<body>";
echo "<p>Tweet passed in = $tweet</p>";
$encodedtweet = urlencode($tweet);
echo "<br> Encode tweet = $encodedtweet<br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
echo "<p> Result from curl = $result </p>";
$noob = json_decode($result, true);
echo "<p> Result from json_decode =  $noob </p>";

//echo "<p> $noob['tweet'] </p>";
//echo "<p> count($noob['topics']) </p>";
echo "</body>";
echo "</html>";


?>
