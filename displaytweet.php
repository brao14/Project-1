<DOCTYPE HTML>
<html>
  <head>
  </head>
<body>

<?php
require_once('graspingsentiment.php');
// header("Refresh:180");
$_SESSION['tns'] = array("test");
$ts=$_SESSION['tns'];

//ar=sentimentReturn();
//array_push($ts, sentimentReturn());
//displaySentiment();


//print_r($_SESSION);
//displayTweet();
?>

<table>
<tr> <td>
<?php $tweet=tweetReturn();
array_push($_SESSION['tns'], $tweet);
displayTweet(); ?>
 </td></tr>
</table>

</body>
</html>
