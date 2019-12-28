<?php

namespace App\Http\Controllers;
use App\Models\QuestionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class QuestionController extends Controller
{
    public function questionIndex(){
        $questions=QuestionModel::with("Answer")->get();
        return Response::json([
            "result"=>"ok",
            "data"=>$questions
        ]);
    }
    public function questionCreate(Request $request){
        $questions=new QuestionModel();
        $questions->question=$request->question;
        $questions->words_id=$request->words_id;
        $questions->answers_id=$request->answers_id;
        $questions->save();
        return Response::json([
            "result"=>"ok",
        ]);
    }
}
