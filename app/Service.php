r<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table="services";
    public function clients(){
        return $this->belongsTo('App\Client');
    }
}
