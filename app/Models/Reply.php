<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $guarded = [];


    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function discussion(){
        return $this->belongsTo(Discussion::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }
}
