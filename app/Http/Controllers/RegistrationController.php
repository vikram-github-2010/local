<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create() {
        
        return view('registration.create');
    }
    
    public function store(){
        
       // dd(request());
       
       //validate the register form
        
        $this->validate(request(),[
            
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
            
            ]);
            
            //create a user
            
            $user=User::create([
                'name'=>request('name'),
                'email'=>request('email'),
                'password'=>request('password')
                ]);
                
                //sign in them
                
                auth()->login($user);
                
                return redirect()->home();
    }
}
