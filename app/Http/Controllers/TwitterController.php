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
    	$data = Twitter::getUserTimeline(['count' => 20, 'format' => 'array']);
    	
     	
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
            
            //get form check id
             $getData= $request['check-tweet'];
             
             //get last content from url
             $ids = substr($getData, strrpos($getData, '/') + 1);
             
             
             $a= Twitter::getTweet($ids);
             print_r($a);
             
             
           
            //get twitter id
        //      $twiter =  Twitter::getUserTimeline(['count' => 20, 'format' => 'array']);
    	
        //   foreach ($twiter as $key=> $value) {
         
        //      $a= $value['id'];
             
        //      // print_r($a)."<br/>";
             
        //      if($ids==$a){
                 
        //          return $message = "This url related post";
                 
        //      }
             
        // }
        
        //if twitter id not matchs
     //   return "this is not related";
         
          

           
               
    // 	$newTwitte = ['status' => $request->tweet];

    	
    // 	if(!empty($request->images)){
    // 		foreach ($request->images as $key => $value) {
    // 			$uploaded_media = Twitter::uploadMedia(['media' => File::get($value->getRealPath())]);
    // 			if(!empty($uploaded_media)){
    //                 $newTwitte['media_ids'][$uploaded_media->media_id_string] = $uploaded_media->media_id_string;
    //             }
    // 		}
    // 	}

    // 	$twitter = Twitter::postTweet($newTwitte);
    
    
    
       // return view('test',compact('twiter','ids'));
       
       
       
    	
    //	return back();
    }
}