<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Validator;

class RegisterController extends Controller
{
    public function Index(){
        $users=UserModel::with('City')->get();
        return Response::json([
            "result"=>"ok",
            "data"=>$users
        ]);
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'name' => 'required',
            'surname'=>'required',
            'user_name' => 'required|unique:users',
            'cities_id'=>'required',
            'country'=>'required',
            'age'=>'required',
        ]);
        if ($validator->fails()) {
            $errors = array();
            foreach ($validator->errors()->messages() as $key => $value) {
                $errors[] = [
                    'field' => $key,
                    'message' => $value[0]
                ];
            }
            return Response::json([
                'result' => 'Error',
                "code" => "10",
                'errors' => $errors,
            ]);
        }
        $users = new UserModel();
        $users->name = $request->name;
        $users->surname=$request->surname;
        $users->user_name=$request->user_name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->country = $request->country;
        $users->cities_id = $request->cities_id;
        $users->age = $request->age;
        $users->save();
        return Response::json([
            "result"=>"ok",
            "token" => $users->createToken("token")->accessToken
        ]);
    }
}
