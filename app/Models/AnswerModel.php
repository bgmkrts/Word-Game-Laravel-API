<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerModel extends Model
{
    protected $table='answers';
    public  $timestamps='true';
    protected $fillable=[
        'answer',
        'isItTrue'
    ];

}
