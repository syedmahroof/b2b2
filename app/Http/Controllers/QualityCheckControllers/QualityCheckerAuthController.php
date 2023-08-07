<?php

namespace App\Http\Controllers\QualityCheckControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualityCheckerAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('quality-checker.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('quality-checker')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('quality-checker.dashboard');
        } else {
            // Authentication failed
            return redirect()->route('quality-checker.login')->with('error', 'Invalid credentials');
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('quality-checker')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('quality-checker.login');
    }
}
