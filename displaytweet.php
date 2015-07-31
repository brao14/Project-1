<?php
require_once('graspingsentiment.php');
header("Refresh:180");


$ts=array();
global $ts;

function displayTweet()
{
$ar=sentimentReturn();
array_push($ts, $ar);

echo "<html>";
echo "<body>";
echo "<table border=\"1\" color=\"red\" style=\"width:100%\">";
echo "<tr>";
echo "<th> Topic:Sentiment </th>";
echo "<th> Tweet </th>";
echo "</tr>";
for ($i=0; $i<sizeof($ts); $i++)
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
