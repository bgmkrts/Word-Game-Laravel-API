<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GameController extends Controller
{
    public function gameIndex(){
      $games=GameModel::all();
      return Response::json([
          "result"=>"ok",
          "data"=>$games
      ]);
    }
    public function gameCreate(Request $request){
        $games=new GameModel();
        $games->name=$request->name;
        $games->save();
        return Response::json([
            "result"=>"ok"
        ]);
    }
}
