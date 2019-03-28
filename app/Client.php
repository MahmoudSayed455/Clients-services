<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table = "clients";
    public function services(){
        return $this->hasMany('App\Service');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
