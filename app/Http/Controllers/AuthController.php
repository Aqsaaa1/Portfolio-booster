<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController extends Controller
{
    // Show Register Form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle Registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $verificationCode = rand(100000, 999999);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verification_code' => $verificationCode,
        ]);

        // Send OTP email
        Mail::raw("Your verification code is: $verificationCode", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Email Verification Code');
        });

        return redirect()->route('verify.form', ['email' => $user->email])
            ->with('success', 'A verification code has been sent to your email.');
    }

    // Show OTP Form
    public function showVerifyForm($email)
    {
        return view('auth.verify', compact('email'));
    }

    // Verify OTP
    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'verification_code' => 'required|digits:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        if ($user->verification_code == $request->verification_code) {
            $user->update([
                'verification_code' => null,
                'email_verified_at' => Carbon::now(),
            ]);

            return redirect()->route('login')
                ->with('success', 'Your email has been verified! Please log in.');
        }

        return back()->with('error', 'Invalid verification code!');
    }



    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Check if user exists
        if (!$user) {
            return back()->with('error', 'Account not found.');
        }

        // Check if verified
        if (is_null($user->email_verified_at)) {
            return back()->with('error', 'Please verify your email before logging in.');
        }

        // Attempt login
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Welcome back!');
        }

        return back()->with('error', 'Invalid credentials.');
    }
}
