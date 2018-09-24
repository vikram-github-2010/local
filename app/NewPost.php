<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPost extends Model
{
    protected $fillable = ['user_name','post','image'];
    
      protected $hidden = [
        'created_at', 'updated_at'
    ];

}
