<?php
require_once('TwitterAPIExchange.php');
function tweetReturn() {

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "448642049-ddgX6SRGNactV5E5mnxx7opluL5YqMXW731YJke5",
    'oauth_access_token_secret' => "cQmXU8icywH1D6GG7Q33lb1OSY8IeF1HpP0uoCNK5O1W6",
    'consumer_key' => "mRGeZ057BmuNx2z6z9eoSYJkS",
    'consumer_secret' => "M6ail8PaiiLElqe4zmRWiLuZHdmevra1JjNfxTfC4w3jwvg4nu"
);

//$url = 'https://api.twitter.com/1.1/search/tweets.json';
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'GET';


//$getfields = '?q=%40washingtonpost&result_type=recent&count=1';
$getfields = '?screen_name=washingtonpost&include_rts=false&count=1';

$twitter = new TwitterAPIExchange($settings);

$twitterjson =  $twitter->setGetfield($getfields)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();

$tjd = json_decode($twitterjson);

/*
echo "<table border=\"1\" color=\"red\" style=\"width:100%\">";
echo "<tr>";
echo "<th> Tweet</th>";
echo "</tr>";
*/
foreach ( $tjd as $k => $v )
{
   if ( $k == "statuses")
   {
    for ( $count = 0; $count < sizeof($v); $count ++ )
    {
      //foreach ( $v[$count] as $key => $val)
      //{
        if ( $key == "text")
        {
          return $val;
          //echo "<br>";
        }
      //}
    }
  }

}

}
//echo "</table>";
?>
