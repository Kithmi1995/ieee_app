<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    protected $table = 'employee';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
