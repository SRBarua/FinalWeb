<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class tweet extends Model
{
    // Carbon instance fields
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function user()
    {
     return $this->belongsTo('App\user');
    }

    public function likes()
    {
        return $this->hasMany('App\like');
    }
    public function getLikedByUserAttribute()
    {
        $id = Auth::id();
        $like = $this->likes->first(function ($row) use ($id){
            return $row->user_id === $id;
        });

        if($like) return true;
        return false;
    }

    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}
