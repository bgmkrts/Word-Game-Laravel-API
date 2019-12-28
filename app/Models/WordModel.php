<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WordModel extends Model
{

    protected $table = "words";
    public $timestamps = true;
    protected $fillable=[
        'word_turkish',
        'word_english',
        'word_picture'
    ];
}
