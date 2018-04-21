<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    public function Teacher(){
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }
}
