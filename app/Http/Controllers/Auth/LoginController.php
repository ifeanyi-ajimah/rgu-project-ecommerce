<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OTPMail;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showLoginForm()
    {
        return view('external.login');
    }


    protected function attemptLogin(Request $request)
    {
        // dd($request->otp_via );
        $result = $this->guard()->attempt(
            $this->credentials($request), $request->boolean('remember')
        );

        

        if(Auth::user()->type != 'admin'){
            Auth::logout();
            // return back()->with('errordata','not allowed');
            return redirect('/login')->with('errordata', 'no business here!');
        }

        if($result){
            // $OTP = rand(100000, 999999);
            // Cache::put(['OTP' => $OTP], now()->addMinute(1) );
            // Mail::to($request->email)->send(new OTPMail($OTP));
            auth()->user()->sendOTP($request->otp_via);

        }
    }

    public function logout(Request $request)
    {
        auth()->user()->update(['is_otp_verified' => 0]);

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/admin');
    }

    
    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
 
    //     if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'type' => 'admin'])) {
    //         $request->session()->regenerate();
 
    //         return redirect()->intended('home');
    //     }
 
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

                // protected function authenticated(Request $request, $user)
                // {
                //     if ( $user->type != 'admin') {
                //         $this->logout($request);

                //         return redirect()->back()
                //             ->withInput($request->only($this->username(), 'remember'))
                //             ->withErrors([
                //                 $this->username() => 'You have no business here.'
                //             ]);
                //     } else {
                //         return redirect()->intended($this->redirectPath());
                //     }
                // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
