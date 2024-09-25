<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/accounts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ( $user->hasAnyRole(['superadmin','admin']) ) {
            return redirect()->route('panels.index');
        }

        return redirect('/id');
    }

    public function update_password($email)
    {
        $email = Crypt::decryptString($email);
        $data = User::where('email', $email)->first();

        return view('auth.update_password', compact('data'));
    }

    public function update_password_email(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
        ]);
        $check = User::find($request->user_id);

        if ($check) {
            $check->update(['password' => Hash::make($request->password)]);
            return redirect()->back()->withStatus('Update password success, please login');
        } else {
            return redirect()->back()->withStatus('Update password fail');
        }
    }

}
