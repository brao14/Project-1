<?php
require_once('graspingtweets.php');
header("Refresh:180");

$tweet=tweetReturn();
$tweetList=array();





$encodedtweet = urlencode($tweet);
// echo "<br> Encoded tweet = $encodedtweet <br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$ar = json_decode($result);
/****
echo "<table border=\"1\" color=\"red\" style=\"width:100%\">";
echo "<tr>";
echo "<th> Topic:Sentiment </th>";
echo "<th> Tweet </th>";
echo "</tr>";
**/
$tweetList[0]=$ar;
foreach ( $ar as $k => $v )
{
   if ( $k == "topics")
   {
    // echo "<tr><td>";
    for ( $count = 0; $count < sizeof($v); $count ++ )
    {
      foreach ( $v[$count] as $topic => $sentiment)
      {
        // echo "$topic : $sentiment";
        // echo "<br>";
      }
    }
    // echo "</td>";
  }

  if ($k == "tweet")
  {
    // echo "<td>" . $v . "</td>";
    // echo "</tr>";
  }

}
/**
echo "</table>";
echo "</body>";
echo "</html>";
***/
?>
