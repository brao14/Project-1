

<?php

$tweet = $_GET["tweet"];
echo "<html>";
echo "<body>";
echo "<p>Tweet passed in = $tweet</p>";
$encodedtweet = urlencode($tweet);
echo "<br> Encode tweet = $encodedtweet <br>";

$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
echo "<p> Result from curl = $result </p>";

//$noob = json_decode($result);
//echo "<p> Result from json_decode  =  $noob </p>";
//echo "<p> $noob->tweet </p>";

$ar = json_decode($result);
//echo "<p> Result from json_decode with true option =  $ar </p>";
//var_dump($ar);

foreach ( $ar as $k => $v ) {
  echo "<br> \$ar[$k] = $v <br>";
}
foreach(array_keys($ar) as $keyname) {
  echo $keyname . "<br>";
  if ($keyname == "tweet") {
      echo "\$ar[$keyname]" ."<br>";
  }
}
echo "</body>";
echo "</html>";
?>
