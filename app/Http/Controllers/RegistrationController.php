<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

//use App\User;
//use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }
    
    public function store(RegistrationForm $form)
    {
        
        // $user= User::create(request(['name','email','password']));
        
        // auth()->login($user);
        
        //  \Mail::to($user)->send(new Welcome($user));
        
        $form->persist();
        
        session()->flash('message','Thanks for sign up');
        
        return redirect()->home();
    }
}
