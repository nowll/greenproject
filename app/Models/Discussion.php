<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Discussion extends Model
{
    //
   protected $guarded = [];


        protected static function booted(){
        static::creating(function ($discussion) {
            $discussion->slug = Str::slug($discussion->title);
        });
    }
     public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

      public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function scopeFilterByChannels($builder)
    {
        if (request()->query('channel')){
            $channel = Channel::where('slug', request()->query('channel'))->first();

            if ($channel){
                return $builder->where('channel_id', $channel->id);
            }

        }

        return $builder;
    }
}
