<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class QuestionModel extends Model
{
    protected $table='questions';
    public  $timestamps='true';
    protected $fillable=[
        'words_id',
        'question',
        'answers_id'
    ];
    public function Word(){
        return $this->hasMany('App\Models\WordModel','words_id','id');
    }
    public function Answer(){
    return $this->belongsTo('App\Models\AnswerModel','answers_id','id');
}
}
