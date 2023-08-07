<?php

namespace App\Http\Controllers\MarketingControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketingExecutiveAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('marketing-executive.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('marketing')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('marketing-executive.dashboard');
        } else {
            // Authentication failed
            return redirect()->route('marketing-executive.login')->with('error', 'Invalid credentials');
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('marketing')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('marketing-executive.login');
    }
}
