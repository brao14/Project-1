<?php
session_start();
require_once('graspingsentiment.php');
header("Refresh:180");


$_SESSION['tns'] = array("test");
$ts=$_SESSION['tns'];

//ar=sentimentReturn();
//array_push($ts, sentimentReturn());
//displaySentiment();

$tweet=tweetReturn();
array_push($_SESSION['tns'], $tweet);
print_r($_SESSION);

displayTweet();

?>
