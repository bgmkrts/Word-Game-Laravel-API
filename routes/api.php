<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("create","RegisterController@create");
Route::get("Index","RegisterController@Index");
Route::get("login","loginController@login");
Route::get("wordIndex","WordController@wordIndex");
Route::post("wordCreate","WordController@wordCreate");
Route::post("gameCreate","GameController@gameCreate");
Route::get("gameIndex","GameController@gameIndex");
Route::get("questionIndex","QuestionController@questionIndex");
Route::post("questionCreate","QuestionController@questionCreate");
Route::get("answerIndex","AnswerController@answerIndex");
Route::post("answerCreate","AnswerController@answerCreate");
Route::post("statisticCreate","StatisticController@statisticCreate");
Route::get("statisticIndex","StatisticController@statisticIndex");
Route::post("cityCreate","CityController@cityCreate");
Route::get("cityIndex","CityController@cityIndex");
Route::post("mail","HomeController@mail");
Route::post("forgotPassword","ForgotPasswordController@forgotPassword");
Route::post("resetPassword","ForgotPasswordController@resetPassword");
Route::get("userShow","loginController@userShow");


