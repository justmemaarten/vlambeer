<?php
session_start();
require_once("../twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "vlambeer";
$twitteruser2 = "tha_rami";
$twitteruser3 = "jwaaaap";
$notweets = 30;
$consumerkey = "BnYjU325xmHeS6aZxUfTavqM9";
$consumersecret = "F21KvZTwQQpJPrtFcZteWKRLnK4ehBUJBpM0sqIFG3uh1T1Szz";
$accesstoken = "155891300-xn7IWkRGBAz0wt7IZRQ8aoEvprcO9ybKSmswCEne";
$accesstokensecret = "waQdoBYTb0muB8T6Ejr3nnYR3ua5ZXgocC2cwWwIpClEP";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

echo json_encode($tweets);

?>