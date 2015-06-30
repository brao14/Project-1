

<?php

$tweet = $_GET["tweet"];
// echo "<p>Tweet passed in = $tweet</p>";
$encodedtweet = urlencode($tweet);
// echo "<br> Encoded tweet = $encodedtweet <br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$ar = json_decode($result);

echo "<table border=\"1\" color=\"red\" style=\"width:100%\">";
echo "<tr>";
echo "<th> Topic:Sentiment </th>";
echo "<th> Tweet </th>";
echo "</tr>";
foreach ( $array as $key => $value )
{
   if ( $key == "topics")
   {
    echo "<tr><td>";
    for ( $count = 0; $count < sizeof($value); $count ++ )
    {
      foreach ( $value[$count] as $topic => $sentiment)
      {
        echo "$topic : $sentiment";
        echo "<br>";
      }
    }
    echo "</td>";
  }

  if ($key == "tweet")
  {
    echo "<td>" . $value . "</td>";
    echo "</tr>";
  }

}
echo "</table>";
echo "</body>";
echo "</html>";
?>
