<?php

namespace App\Http\Controllers;

use App\Models\CityModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CityController extends Controller
{
    public function cityIndex(){
        $cities=CityModel::all();
        return Response::json([
            "result"=>"ok",
            "data"=>$cities
        ]);
    }
    public function cityCreate(Request $request){
        $cities=new CityModel();
        $cities->name=$request->name;
        $cities->save();
        return Response::json([
            "result"=>"ok"
        ]);
    }
}
