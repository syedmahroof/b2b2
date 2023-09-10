<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('buyer.pages.auth.login');
    }

     // Show login form
     public function profile()
     {
         return view('buyer.pages.profile');
     }

    // Handle login form submission
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('buyer')->attempt($credentials)) {
            // Authentication passed
            return response()->json(['success' => true]);
        } else {
            // Authentication failed
            return response()->json(['success' => false]);
        }
    }

    // Show login form
    public function showRegisterForm()
    {
        return view('buyer.pages.auth.sign-up');
    }

    public function forgotPassword()
    {
        return view('buyer.pages.auth.reset-password');
    }

    // Handle registration form submission
    public function signup(Request $request)
    {
        // Validate user input
        $credentials = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email|unique:buyers', // Assuming 'buyers' is your buyers table
            'password' => 'required|min:8|confirmed',
        ]);

        // Create a new buyer
        $buyer = new Buyer();
        $buyer->fullname = $credentials['fullname'];
        $buyer->email = $credentials['email'];
        $buyer->password = bcrypt($credentials['password']); // Hash the password

        // Save the buyer to the database
        $buyer->save();

        // Log in the newly registered user
        Auth::guard('buyer')->login($buyer);

        // Redirect to the buyer's dashboard or wherever you want
        return redirect()->route('buyer.home')->with('success', 'Registration successful!');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('buyer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('buyer.login');
    }
}
