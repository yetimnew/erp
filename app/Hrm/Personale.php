<?php

namespace App\Hrm;

use Illuminate\Database\Eloquent\Model;

class Personale extends Model
{
    protected $fillable = [
        'personalesid', 'firstname', 'fathername', 'gfathername', 'sex', 'birthdate', 'zone',
        'woreda', 'kebele', 'housenumber', 'mobile', 'hireddate', 'department_id', 'job_id',
        'image', 'user_id', 'about', 'status'
    ];
    protected $dates = ['birthdate', 'hireddate'];
    
    public function getFullNameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->fathername) . ucfirst($this->gfathername);
    }
    public function getSexAttribute($attribute)
    {
        return [
            1 => "Male",
            0 => "Fmale"
        ][$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    // Relashinship Attribute

    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }
}
