<?php
require_once('graspingtweets.php');
header("Refresh:180");
?>

<!DOCTYPE HTML>
<html>
  <head>
  </head>
<body>
<p> Hello, I will display tweets for you </p>
<table>
<?php
$tw = tweetReturn();
if ( array_pop($_SESSION['tweets'])!= $tw ) {
array_push($_SESSION['tweets'], tweetReturn());
}
displayTweet();
?>
</table>

</body>
</html>
