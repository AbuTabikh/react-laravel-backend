<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    
   	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'name', 'programme_id', 'credit'
    ];


    public function semesters()
    {
        return $this->belongsToMany('App\Semester', 'semester_modules');

    }
}
