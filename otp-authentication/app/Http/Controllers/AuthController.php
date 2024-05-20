<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate(['phone' => 'required']);

        $user = User::where('phone', $request->phone)->first();
        if ($user) {
            $otp = rand(100000, 999999);
            $user->otp = $otp;
            $user->save();

            // Display OTP in the console
            error_log('Your OTP is: ' . $otp);

            return view('auth.verify', ['phone' => $request->phone]);
        } else {
            return back()->withErrors(['phone' => 'Phone number not registered.']);
        }
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'otp' => 'required',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if ($user && $user->otp == $request->otp) {
            $user->otp_verified_at = now();
            $user->save();

            Auth::login($user);

            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['otp' => 'Invalid OTP.']);
        }
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'phone' => 'required|unique:users',
        ]);

        $user = new User;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}

