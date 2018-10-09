<?php

namespace App\Http\Controllers;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Http\Request;
use Twitter;
use File;
use TwitterAPIExchange;
class ApiControllerTest extends Controller
{
        function get_conversation()
           {
                    
    
                    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
                    $settings = array(
                        'oauth_access_token' => "1044126146974015490-8kRIlKjI30nWHPvPibprpts6DK7xXf",
                        'oauth_access_token_secret' => "3s169Io7YA1yHPL17wt9ZuKDq8Ii27mXVpXGCxpICjnWh",
                        'consumer_key' => "EZ8oQF860D40di1fuPHKvBZBJ",
                        'consumer_secret' => "h39MhoIvyDqRYbsKesHSm3XxZGtWkF4m0ihkseUABCc60EVGCk"
                    );
                    
                    
                    
                    // Your specific requirements
                    $url = 'https://api.twitter.com/1.1/search/tweets.json';
                    $requestMethod = 'GET';
                    $getfield = '?q=to:ipriyanksharmaa&sinceId=1047918252221972488&count=100';
                    
                    // Perform the request
                    $twitter = new TwitterAPIExchange($settings);
                    $b =  $twitter->setGetfield($getfield)
                                 ->buildOauth($url, $requestMethod)
                                 ->performRequest();
                    
                    $arr = json_decode($b,TRUE);
                    
                    echo "Replies <pre>";
                    print_r($arr);
                    die;
     }
         
}
