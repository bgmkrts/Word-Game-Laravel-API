<?php
namespace App\Http\Controllers;
use App\Models\StatisticModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class StatisticController extends Controller
{
    public function statisticIndex(){
        $statistics=StatisticModel::with('User','Answer')->get();
        return Response::json([
            "result"=>"ok",
            "data"=>$statistics
        ]);
    }
    public function statisticCreate(Request $request){
        $statistics=new StatisticModel();
        $statistics->answers_id=$request->answers_id;
        $statistics->users_id=$request->users_id;
        $statistics->falseAnswer=$request->falseAnswer;
        $statistics->save();
        return Response::json([
            "result"=>"ok"
        ]);
    }
}
