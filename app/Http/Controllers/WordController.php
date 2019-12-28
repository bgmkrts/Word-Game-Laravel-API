<?php

namespace App\Http\Controllers;

use App\Models\WordModel;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function wordIndex()
    {
        $words = WordModel::all();
        return Response::json([
            "result" => "ok",
            "data" => $words
        ]);
    }
    public function wordCreate(Request $request)
    {
        $words = new WordModel();
        $words->word_turkish = $request->word_turkish;
        $words->word_english = $request->word_english;
        $words->word_picture = $request->word_picture;
        $words->save();
        return Response::json([
            "result" => "ok",
        ]);
    }
}
