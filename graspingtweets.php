<?php
require 'app_tokens.php';
require 'tmhOAuth.php';

$connection = new tmhOAuth(array(
  'consumer_key' => $consumer_key,
  'consumer_secret' => $consumer_secret,
  'user_token' => $user_token,
  'user_secret' => $user_secret
));

$connection->request('GET', $connection->url('1.1/search/tweets'), array('screen_name' => 'washingtonpost'));

$response_code=$connection->response['code'];

if ($response_code <> 200) {
 print "Error: $response_code\n";
 error_log("Bharat: Response code is not 200");
}
$response_data = json_decode($connection->response['response'],true);

error_log("Bharat: $response_code");
print_r($response_data);

?>
