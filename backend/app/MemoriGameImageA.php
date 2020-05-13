<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoriGameImageA extends Model
{

        protected $fillable = [

        'image',

    ];

        public function MemoriGameImageA()

    {

        return $this->hasOne('App\MemoriGameImageB');

    }



}
