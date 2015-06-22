<?php

require 'app_tokens.php';
require 'tmhOAuth.php';

$connection = new tmhOAuth(array(
  'consumer_key' => $consumer_key,
  'consumer_secret' => $consumer_secret,
  'user_token' => $user_token,
  'user_secret' => $user_secret
));

$connection->request('GET', $connection->url('http://apis.feeltiptop.com/demos/Restler/twitterdemo/tweet/analyze?tweet=Chilly%20on%20the%20first%20day%20of%20summer%20in%20the%20bay%20area'),array(''));

$response_code=$connection->response['code'];


$response_data = json_decode($connection->response['response'],true);


if ($response_code <> 200) {
 print "Error: $response_code\n";
 error_log("Bharat: Response code is not 200");
}

print_r($response_data);
?>
