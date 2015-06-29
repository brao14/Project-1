

<?php
// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_GET["tweet"];
echo "<body>";
echo "<h2>";
echo "<p>$tweet</p>";
$encodedtweet = urlencode($tweet);
echo "<br>$encodedtweet<br>";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $encodedtweet);
$result = curl_exec($curl);
curl_close($curl);
//print $result;
$noob = json_decode($result->response['response'], false);

echo "<p>$noob.items[0].tweet </p>";
echo "</body>";
echo "</html>";


/*
<tr>
<td>
<?php echo $noob.tweet?>

</td>;

<?php
$count=0;
for ($count=0; $count<$noob.topics.length; $count++)
{
  //table += "<tr><td>" + noob.items[count].tweet + "</td>";
  //for (count1=0; count1<noob.items[count].topic.length; count1++)
    foreach ($propertyName as $noob.topics[$count])
    {
      $table .= "<td>" . $propertyName . ":" . $noob.topics[$count][$propertyName] . "</td>";
    }
}
echo $table;
?>
</tr>
</table>
*/
?>
