<?php

namespace App\Operation;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['image', 'user_id', 'about'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
