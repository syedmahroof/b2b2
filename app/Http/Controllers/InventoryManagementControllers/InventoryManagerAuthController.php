<?php

namespace App\Http\Controllers\InventoryManagementControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryManagerAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('inventory-manager.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('inventory-manager')->attempt($credentials)) {
            // Authentication passed
            return redirect()->route('inventory-manager.dashboard');
        } else {
            // Authentication failed
            return redirect()->route('inventory-manager.login')->with('error', 'Invalid credentials');
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('inventory-manager')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inventory-manager.login');
    }
}
