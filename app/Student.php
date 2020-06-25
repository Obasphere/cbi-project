<?php

namespace CBI;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'student_id', 'uniqueid', 'score',
    ];
}
