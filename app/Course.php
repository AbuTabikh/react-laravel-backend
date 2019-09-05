<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    

    public function module()
    {
        return $this->belongsTo('App\Module');

    }

    public function semester()
    {
        return $this->belongsTo('App\Semester');

    }

    public function student()
    {
        return $this->belongsTo('App\Student');

    }

}
