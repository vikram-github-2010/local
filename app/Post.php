<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasmany(Comment::class);
    }
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function addcomment($body)
    {
        // Comment::create([
        //     'body'=>request('body'),
        //     'post_id'=>$this->id 
            
        //     ]);
        
        $this->comments()->create(compact('body'));
        
    }
    
    
    public static function archives()
    {
        return static:: selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
         ->groupBy('year','month')
         ->orderByRaw('min(created_at)')
         ->get()
          ->toArray();
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
