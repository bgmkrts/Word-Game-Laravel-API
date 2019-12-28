<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatisticModel extends Model
{
    protected $table="statistics";
    public $timestamps=true;
    protected $fillable=[
        'answers_id',
        'users_id',
        'false_answer',


    ];
    public function Answer(){
        return $this->belongsTo('App\Models\AnswerModel','answers_id','id');
    }
    public function User(){
        return $this->belongsTo('App\Models\UserModel','users_id','id');
    }

}
