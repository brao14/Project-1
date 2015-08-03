<?php
require_once('graspingsentiment.php');
header("Refresh:180");

session_start();
$_SESSION['tns'] = array();
$ts=$_SESSION['tns'];

//ar=sentimentReturn();
//array_push($ts, sentimentReturn());
//displaySentiment();

$tweet=tweetReturn();
array_push($_SESSION['tns'], $tweet);
print_r($_SESSION);

displayTweet();

?>
