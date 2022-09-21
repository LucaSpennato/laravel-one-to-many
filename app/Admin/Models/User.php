<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class User extends Model
{
    //

    public function posts(){
        return $this->hasMany('App\Admin\Post');
    }
}
