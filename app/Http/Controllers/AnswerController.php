<?php
namespace App\Http\Controllers;
use App\Models\AnswerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AnswerController extends Controller
{
    public function answerIndex(){
        $answers=AnswerModel::all();
        return Response::json([
            "result"=>"ok",
            "data"=>$answers
        ]);
    }
    public function answerCreate(Request $request){
        $answers=new AnswerModel();
        $answers->answer=$request->answer;
        $answers->isItTrue=$request->isItTrue;
        $answers->save();
        return Response::json([
            "result"=>"ok"
        ]);
    }
}

