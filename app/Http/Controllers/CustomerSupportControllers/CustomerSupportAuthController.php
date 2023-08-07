<?php

namespace App\Http\Controllers\CustomerSupportControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerSupportAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('customer-support.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('customer-support')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('customer-support.dashboard');
        } else {
            // Authentication failed
            return redirect()->route('customer-support.login')->with('error', 'Invalid credentials');
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('customer-support')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer-support.login');
    }
}
