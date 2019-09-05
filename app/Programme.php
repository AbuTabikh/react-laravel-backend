<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'faculty_id`'
    ];


    public function faculty()
    {
        return $this->belongsTo('App\Faculty');

    }

}
