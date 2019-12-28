<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameModel extends Model
{
    protected $table="games";
    public $timestamps=true;
    protected $fillable=[
        'name'
    ];
}
