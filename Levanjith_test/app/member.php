<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = ['fname','lname','divition','dob','summery'];
}
