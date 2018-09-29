<?php

namespace App\Http\Controllers;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Http\Request;
use Twitter;
use File;

class TwitterController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function twitterUserTimeLine()
    
    {
        //get all twitter details
    	  $data = Twitter::getUserTimeline(['count' => 1, 'format' => 'array']);
    	
     	
    	//var_dump($data);
    	return view('twitter',compact('data'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function tweet(Request $request)
    {   
        
        $TWITTER_CONSUMER_KEY='EZ8oQF860D40di1fuPHKvBZBJ';
        $TWITTER_CONSUMER_SECRET='h39MhoIvyDqRYbsKesHSm3XxZGtWkF4m0ihkseUABCc60EVGCk';
        $TWITTER_ACCESS_TOKEN='1044126146974015490-8kRIlKjI30nWHPvPibprpts6DK7xXf';
        $TWITTER_ACCESS_TOKEN_SECRET='3s169Io7YA1yHPL17wt9ZuKDq8Ii27mXVpXGCxpICjnWh';
            
         // dd($request);
         
    	$this->validate($request, [
        		'tweet' => 'required',
        		'title'=>'required',
        		'check-tweet'=>'required'
        	]);
            
            //get form filled url
            $getData= $request['check-tweet'];
            
            //validate url exists
            $array = get_headers($getData);
            $string = $array[0];
            if(strpos($string,"200"))
              {
                
                //get id from url
                $ids = substr($getData, strrpos($getData, '/') + 1);
                 
                //get details from id
                $data= Twitter::getTweet($ids);
                
               //convert into arrays getTweet function
                $arrays = json_decode(json_encode($data), true);
                
                //get location from arrays
                $location = $arrays['user']['location'];
    
                //use Oauth Api create Object
                $retweet = new TwitterOAuth($TWITTER_CONSUMER_KEY,$TWITTER_CONSUMER_SECRET,$TWITTER_ACCESS_TOKEN,$TWITTER_ACCESS_TOKEN_SECRET);
                
                //query to search location Tweet
                $dataTweet=$retweet->get("search/tweets", ["q" => "$location"]);
                print_r($dataTweet);
                
                // $a= $dataTweet->statuses;
                // print_r($a);
                
                
                
                //$dataTweet->statuses->created_at;
        
                //return view('test_retweet',compact('dataTweet'));
                 
               // return view('test',compact('arrays'));
              }
              else
              {
                echo 'url does not exist';
                
              }
              
            
            
              
       
       
    	
    //	return back();
    }
}