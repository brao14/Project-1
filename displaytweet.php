<?php
require_once('graspingsentiment.php');
header("Refresh:180");
global $ts;
//ar=sentimentReturn();
array_push($ts, sentimentReturn());
displayTweet();


?>
