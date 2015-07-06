<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "448642049-ddgX6SRGNactV5E5mnxx7opluL5YqMXW731YJke5",
    'oauth_access_token_secret' => "cQmXU8icywH1D6GG7Q33lb1OSY8IeF1HpP0uoCNK5O1W6",
    'consumer_key' => "mRGeZ057BmuNx2z6z9eoSYJkS",
    'consumer_secret' => "M6ail8PaiiLElqe4zmRWiLuZHdmevra1JjNfxTfC4w3jwvg4nu"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';


$getfields = '?q=%40washingtonpost';

$twitter = new TwitterAPIExchange($settings);

$twitterjson =  $twitter->setGetfield($getfields)
                        ->buildOauth($url, $requestMethod)
                        ->performRequest();

$twitterjsondecode = json_decode($twitterjson);

print $twitterjsondecode[0];



foreach ( $twitterjsondecode as $k => $v )
{
  print "Hello";
  /*
  $statuscounts = 0;
   if ( $k == "search_metadata")
   {
     print $v.count;
     $statuscounts=$v.count;
   }
   */
   if ( $k == "statuses")
   {
     $statuscounts=sizeof($v);
     for ($i=0; $i<$statuscounts; $i++)
     {
        foreach ($v[$i] as $key => $value)
        {
          if ( $key == "text")
          {
            print $key;
          }
        }
     }

   }


}

?>
