<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id'
    ];
    
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    
    public function users(){
        
        //return $this->belongsTo(User::class);
        return $this->belongsTo('App\User','user_id');
    }
     
     public function comments(){
         
         return $this->hasMany(Comment::class);
     }
}
