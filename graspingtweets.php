<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "XLBkWmMkhrcllKEZIyGnKPbJJ",
    'oauth_access_token_secret' => "EtsltFAzRFNafTsTnVWGwbSjnIbgCry7ostvWAJiNIbZ8sAscO",
    'consumer_key' => "448642049-WCSocyo4mAL2cRnCJdEv0vJAts9FGx9IozRU6z6H",
    'consumer_secret' => "xy0DccFAkfyBQy8WX8VL4txok8rcdlV43ZnGlEleGo6MB"
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'GET';

$getfields = array(
    'screen_name' => 'washingtonpost',
    'count' => '15'
    'include_rts' => '1'
);

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>
