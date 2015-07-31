<?php
require_once('graspingsentiment.php');
header("Refresh:180");

//ar=sentimentReturn();
array_push($ts, sentimentReturn());
displayTweet();


?>
