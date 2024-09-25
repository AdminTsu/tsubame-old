<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Crypt;
use App\Mail\UpdatePasswordEmail;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $check = User::where('email', $request->email)->first();

        if ($check) {
            $dataEmail = [
                'name' => $check->name,
                'url' => route('login.update_password', Crypt::encryptString($check->email))
            ];

            Mail::to($check->email)->send(new UpdatePasswordEmail($dataEmail));
            return redirect()->back()->withStatus('please check your email');
        }

        $validator = Validator::make($request->all(), ['email' => 'required']);
        $validator->errors()->add("email", "We can't find a user with that e-mail address.");
        return redirect()->back()->withErrors($validator)->withInput();
    }

}
