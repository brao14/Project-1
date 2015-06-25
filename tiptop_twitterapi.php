<?php


// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweet = $_REQUEST["tweet"];
print $tweet;
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $tweet);
$result = curl_exec($curl);
curl_close($curl);
//print $result;
//$jsonresult = json_decode($result->response['response'], false);

?>
