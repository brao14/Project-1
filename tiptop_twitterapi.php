<?php

/*require 'app_tokens.php';
require 'tmhOAuth.php';

$connection = new tmhOAuth(array(
  'consumer_key' => $consumer_key,
  'consumer_secret' => $consumer_secret,
  'user_token' => $user_token,
  'user_secret' => $user_secret
));

$connection->request('GET', $connection->url('http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area'));

$response_code=$connection->response['code'];


$response_data = json_decode($connection->response['response'],true);

$response_rawdata = $connection->response['response'];


if ($response_code <> 200) {
 print "Error: $response_code\n";
 error_log("Bharat: Response code is not 200");
}

error_log("Bharat: $response_code");
print_r($response_rawdata);
error_log("Bharat: $response_rawdata");
print_r($response_data);
*/
// http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area
$tweetvariable="Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area";
$curl = curl_init("http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=" . $tweetvariable);
$result = curl_exec($curl);
curl_close($curl);
print $result;
$jsonresult = json_decode($result->response['response'], true);
exit("This doesn't work");

?>
