<?php


// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_GET["tweet"];
//echo "<h2>$tweet</h2>";
$encodedtweet = urlencode($tweet);
//echo "<h2>$encodedtweet</h2>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
$result = curl_exec($curl);
curl_close($curl);
//print $result;
$noob = json_decode($result->response['response'], false);
//var json = '{"bayarea": "50", "tweet": "Chilly on the first day of summer in the bay area"}'
//var json = '{"items" : [{"tweet" : "Obama is the president of the United States", "topic" : [ {"Obama" : "50"}, {"President" : "100"} ] }, {"tweet" : "Chilly in the Bay Area", "topic" : [ {"BayArea" : "50"}, {"Weather" : "100"} ] }]}'
//var noob = JSON.parse(json);
//document.getElementById("tweet").innerHTML = noob.items[1].topic[1].Weather;
//console.log("Number of topics = ", noob.topics.length);
$count=0;
$table = "<table style=\"width:100%\">"

$table .= "<tr><td>" . $noob.tweet . "</td>";

for ($count=0; $count<$noob.topics.length; $count++)
{
  //table += "<tr><td>" + noob.items[count].tweet + "</td>";
  //for (count1=0; count1<noob.items[count].topic.length; count1++)
    foreach ($propertyName as $noob.topics[$count])
    {
      $table .= "<td>" . $propertyName . ":" . $noob.topics[$count][$propertyName] . "</td>";
    }
}
  $table .= "</tr>";
  //document.getElementById("tweets").innerHTML = myRows;
  //document.getElementById("tt_main").innerHTML = myHTML;
$table .= "</table>";
echo($table);

?>
