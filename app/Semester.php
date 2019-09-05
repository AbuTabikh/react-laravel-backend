<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'start_date', 'end_date', 'year'
    ];


     
    public function modules()
    {
        return $this->belongsToMany('App\Module', 'semester_modules');

    }

}
