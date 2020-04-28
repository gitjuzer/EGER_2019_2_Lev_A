<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Test extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function scores () {
        return $this->hasMany('App\Score');
    }

    public function questions (){
        return $this->hasMany('App\Question');
    }
}
