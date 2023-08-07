<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerAuthController extends Controller
{
    //
}
<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerAuthController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('buyer.login');
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
            return redirect()->route('buyer.dashboard');
        } else {
            // Authentication failed
            return redirect()->route('buyer.login')->with('error', 'Invalid credentials');
        }
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
