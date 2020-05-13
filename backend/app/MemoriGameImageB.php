<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoriGameImageB extends Model
{

	protected $fillable = [

        'image',

    ];
    
        public function MemoriGameImageB()

    {

        return $this->belongsTo('App\MemoriGameImageA');

    }
}
