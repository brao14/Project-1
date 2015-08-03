<?php
require_once('graspingsentiment.php');
header("Refresh:180");
$tweet=tweetReturn();
session_start();
$_SESSION['tns'] = array();
$ts=$_SESSION['tns'];
//ar=sentimentReturn();
//array_push($ts, sentimentReturn());
array_push($ts, $tweet);
print_r($_SESSION);
echo "Done with arraypush";
//displaySentiment();
displayTweet();


?>
