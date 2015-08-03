<?php
require_once('graspingsentiment.php');
header("Refresh:180");
$ts=$_SESSION['tns'];
//ar=sentimentReturn();
array_push($ts, sentimentReturn());
displayTweet();


?>
