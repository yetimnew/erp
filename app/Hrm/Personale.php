<?php

namespace App\Hrm;

use Illuminate\Database\Eloquent\Model;

class Personale extends Model
{
    protected $guarded = [
    'personalesid', 'firstname', 'fathername', 'gfathername', 'sex', 'birthdate', 'zone', 'woreda', 'kebele', 'housenumber', 'mobile', 'hireddate', 'department_id', 'job_id', 'image', 'user_id', 'about', 'status'
];
    public function getFullNameAttribute() {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->fathername) . ucfirst($this->gfathername);
    }
    public function getSexAttribute($attribute)
    {
        return [
            1 => "Male",
            0 => "Fmale"
        ][$attribute];
    }

    // Relashinship Attribute

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
