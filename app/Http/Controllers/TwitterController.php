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
                
                //get tweet from location
                $tweets = Twitter::getSearch(array('q' => $location, 'count' => 100, 'format' => 'array'));
                
                             
                return view('test_retweet',compact('tweets'));
                 
               // return view('test',compact('arrays'));
              }
              else
              {
                echo 'url does not exist';
                
              }
              
            
            
              
       
       
    	
    //	return back();
    }
}