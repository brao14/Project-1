<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
  </head>
<body>

<table>
<?php
array_push($_SESSION['tns'], tweetReturn());
displayTweet();
?>
</table>

</body>
</html>
