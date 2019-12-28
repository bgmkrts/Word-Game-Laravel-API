<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class UserModel extends Model
{
    use HasApiTokens, Notifiable;
    protected $table="users";
    public $timestamps=true;
    protected $fillable=([
        'name',
        'surname',
        'user_name',
        'password',
        'email',
        'country',
        'cities_id',
        'age'
        ]);

    public function City(){
         return $this->belongsTo('App\Models\CityModel','cities_id','id');
     }

}
