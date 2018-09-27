<?php

namespace App\Http\Controllers;

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
                //print_r($data);
                
                //get retweet related to id
                 $retweet= Twitter::getRts($ids);
                
                // $retwitter = json_decode(json_encode($retweet), true);
               
                 $arrays = json_decode(json_encode($data), true);
                
                 //return view('test_retweet',compact('retwitter'));
                 
                 return view('test',compact('arrays'));
              }
              else
              {
                echo 'url does not exist';
                
              }
              
            
            
              
       
       
    	
    //	return back();
    }
}