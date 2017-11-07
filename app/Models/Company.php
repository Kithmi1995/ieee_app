<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['id'];

    protected $table = 'company';

    public function user(){
        return $this->belongsTo('App\User');
    }

}
