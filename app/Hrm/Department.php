<?php

namespace App\Hrm;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
