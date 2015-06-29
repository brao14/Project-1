

<?php
// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_GET["tweet"];
echo "<html>";
echo "<body>";
echo "<p>$tweet</p>";
$encodedtweet = urlencode($tweet);
echo "<br>$encodedtweet<br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);

//print $result;
$noob = json_decode($result->response['response'], false);
$twitter=$noob.tweet;
echo $twitter;
/*
echo "<table style=\"width:100%\">"

echo "<tr><td>" , $noob.tweet , "</td>";

$count=0;
for ($count=0; $count < $noob.topics.length; $count++)
{
    foreach ($propertyName as $noob.topics[$count])
    {
      echo "<td>" , $propertyName , ":" , $noob.topics[$count][$propertyName] , "</td>";
    }
}

echo "</table">;
*/
echo "</body>";
echo "</html>";
curl_close($curl);

?>
