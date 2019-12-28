<?php
namespace App\Http\Controllers;
use App\Mail\SendMailable;
use App\Models\ForgotPasswordModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ]);
        $user = UserModel::where("email", $request->email)->first();
        if (isset($user)) {
            $forgot_password = new ForgotPasswordModel();
            $forgot_password->email = $request->email;
            $forgot_password->code = $code = rand(100000, 999999);
            $forgot_password->save();
            return 'ok';
        }
        else {
            return "Kullanıcı bulunamadı";
        }
            }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'code' => 'required',
            'password' => 'required',
        ]);
        $model = ForgotPasswordModel::where("email", $request->email)->where("code", $request->code)->first();

        if (isset($model)) {
            $user = UserModel::where("email", $request->email)->first();
            $user->update([
                "password" => Hash::make($request->password)
            ]);
            return 'ok';
        }
        else {
            return "Kayıt bulunamadı";
        }
    }
}
