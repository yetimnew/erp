<?php

namespace App\Hrm;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function department()
    {
        return $this->hasOne(Department::class);
    }
}
