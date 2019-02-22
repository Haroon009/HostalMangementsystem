<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $guarded=[];
    public function Room(){

        return $this->hasOne( Rooom::class);
    }
}
