<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(){
        
        return view ('fileupload');
    }
    
    
    public function showupload(Request $request)
    {
        // $this->validate([$request,[
        //     'photo'=>'required'
        //     ]]);
        
        if($request->hasFile('photo'))
        {
            
            
            foreach($request->photo as $photo ){
                
                $file = $photo->getClientOriginalName();
            
                $size = $photo->getClientsize();
                
                $photo->storeAs('public/upload',$file);
                 
                $photoModel = new File();
            
                $photoModel->name= $file;
                $photoModel->size= $size;
                
                $photoModel->save();
                 
                }
            
           
            
          return 'yes';
          
        }
        
        return $request->all();
        
        //return view('')
    }
    
    public function add($id){
        
        $img= File::Find($id);
       
       $a=$img->name;
        
       $contents = Storage::url('upload/'.$a);
       
      //return "<img src='".$contents."'/>";
       
       //$contents = Storage::disk('local')->get($fileName);
        
       // return response()->download($path);
       
       return view('Image',compact('contents'));
    }
}
