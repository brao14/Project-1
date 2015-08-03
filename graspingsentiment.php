<?php
require_once('graspingtweets.php');


function sentimentReturn()
{
$tweet=tweetReturn();

$encodedtweet = urlencode($tweet);
echo "<br> Encoded tweet = $encodedtweet <br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);

$ar = json_decode($result);
print_r($ar);
return $ar;
}




function displayTweet
{
  $tweet=$_SESSION['tns'];
  $max=sizeof($_SESSION['tns']);
  for ($i=0; $i<$max; $i++)
  {
    echo $ts[$i];
  }
}

function displaySentiment()
{
$ts=$_SESSION['tns'];
echo "<html>";
echo "<body>";
$max=sizeof($_SESSION['tns']);
echo "<h1>Displaying $max tweets</h1>";
echo "<table border=\"1\" color=\"red\" style=\"width:100%\">";
echo "<tr>";
echo "<th> Topic:Sentiment </th>";
echo "<th> Tweet </th>";
echo "</tr>";
for ($i=0; $i<$max; $i++)
{
foreach ( $ts[$i] as $k => $v )
{
   if ( $k == "topics")
   {
    echo "<tr><td>";
    for ( $count = 0; $count < sizeof($v); $count ++ )
    {
      foreach ( $v[$count] as $topic => $sentiment)
      {
        echo "$topic : $sentiment";
        echo "<br>";
      }
    }
    echo "</td>";
  }

  if ($k == "tweet")
  {
    echo "<td>" . $v . "</td>";
    echo "</tr>";
  }

}
}

echo "</table>";
echo "</body>";
echo "</html>";
}

?>
