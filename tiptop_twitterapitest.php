

<?php

$tweet = $_GET["tweet"];
echo "<p>Tweet passed in = $tweet</p>";
$encodedtweet = urlencode($tweet);
echo "<br> Encode tweet = $encodedtweet <br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$ar = json_decode($result);

echo "<table>";
echo "<tr>";
echo "<th> Tweet </th>";
echo "<th> Topic:Sentiment </th>";
echo "</tr>";
foreach ( $ar as $k => $v ) {

  if ($k == "tweet") {
    echo "<tr><td>" . $v . "</td></tr>";
  }

   if ( $k == "topics") {
     echo "<tr><td>";
    for ( $count = 0; $count < sizeof($v); $count ++ ) {
      foreach ( $v[$count] as $topic => $sentiment) {
        echo "$topic : $sentiment";
        echo "<br>";
      }
    }
  }
  echo "</td></tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>
