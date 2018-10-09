<?php

use Abraham\TwitterOAuth\TwitterOAuth;



    $TWITTER_CONSUMER_KEY='EZ8oQF860D40di1fuPHKvBZBJ';
    $TWITTER_CONSUMER_SECRET='h39MhoIvyDqRYbsKesHSm3XxZGtWkF4m0ihkseUABCc60EVGCk';
    $TWITTER_ACCESS_TOKEN='1044126146974015490-8kRIlKjI30nWHPvPibprpts6DK7xXf';
    $TWITTER_ACCESS_TOKEN_SECRET='3s169Io7YA1yHPL17wt9ZuKDq8Ii27mXVpXGCxpICjnWh';
    
    
$retweet = new TwitterOAuth($TWITTER_CONSUMER_KEY,$TWITTER_CONSUMER_SECRET,$TWITTER_ACCESS_TOKEN,$TWITTER_ACCESS_TOKEN_SECRET);
  $data1=$retweet->get("search/tweets", ["q" => "Mohali,India"]);
    //convert into arrays getTweet function
  $arrays = json_decode(json_encode($data1), true);
  //var_dump($arrays);
   echo"<pre>";print_r($arrays);
   
    
    
    
    
        
?>

