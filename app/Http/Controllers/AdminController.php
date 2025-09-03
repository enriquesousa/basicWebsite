<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCodeMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminLogin(Request $request){

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            $verificationCode = random_int(100000,999999);
            session(['verification_code' => $verificationCode, 'user_id' => $user->id ]);
            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

            Auth::logout();
            return redirect()->route('custom.verification.form')->with('status',__('Verification code send to your mail'));
        }

        return redirect()->back()->withErrors(['email' => __('Invalid Credentials Provided')]); 
    }




}
