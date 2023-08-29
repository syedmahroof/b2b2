<?php

namespace App\Http\Controllers\SupplierControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('supplier.pages.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('supplier')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('supplier.dashboard');
        } else {
            // Authentication failed
            return redirect()->route('supplier.login')->with('error', 'Invalid credentials');
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('supplier')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('supplier.login');
    }
}
