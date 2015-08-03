<?php
require_once('graspingtweets.php');
?>

<!DOCTYPE HTML>
<html>
  <head>
  </head>
<body>
<p> Hello, I will display tweets for you </p>
<table>
<?php
array_push($_SESSION['tweets'], tweetReturn());
displayTweet();
?>
</table>

</body>
</html>
