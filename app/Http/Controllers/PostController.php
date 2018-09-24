<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewPost;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(){
        
        return view('computer.index');
    }
    
    public function store(Request $request){
        
     //dd($request->all());
        
        // NewPost::create([
        //     'user_name'=>request('username'),
        //     'post'=>request('posts')
        //     ]);
            
        //     // $post = new NewPost();
            
        //     // $post->user_name=request('username');
        //     // $post->post=request('posts');
        //     // $post->save();
            
        //     return redirect('post');
            
        if($request->hasFile('image'))
        {
            
            
            foreach($request->image as $photo ){
                
                $file = $photo->getClientOriginalName();
                
                $photo->storeAs('public/post',$file);
                 
                NewPost::create([
                'user_name'=>request('username'),
                'post'=>request('posts'),
                'image'=>$file
                ]);
                     
                }
        
            
          return redirect('/');
          
        }
            
        
    } 
    
    public function show(){
        
        
          $post =NewPost::orderBy('created_at', 'desc')->get();
          
        //   foreach($post as $nost){
              
        //      // var_dump($nost);
        //         echo $contents= $nost->image;
                
              
        //     //   print_r($contents); die;
        //      echo "<img src=storage/upload/".$contents."/>";
        //   }
          
        
          
          
         //return "<img src='".$contents."'/>";

        
      return view('computer.show',compact('post'));
    }
}
