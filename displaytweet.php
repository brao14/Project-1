<?php
require_once('graspingsentiment.php');
header("Refresh:180");
session_start();
$_SESSION['tns'] = array();
$ts=$_SESSION['tns'];
//ar=sentimentReturn();
array_push($ts, sentimentReturn());
echo "Done with arraypush";
displayTweet();


?>
