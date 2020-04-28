<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question'
    ];

    public function questionType (){
        return $this->belongsTo('App\QuestionType');
    }

    public function test (){
        return $this->belongsTo('App\Test');
    }

    public function answers () {
        return $this->hasMany('App\Answer');
    }
}
