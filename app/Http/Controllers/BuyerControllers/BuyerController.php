<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    // Show home page
    public function index()
    {
        if (Auth::guard('buyer')->check()) {
            // If logged in, show the home page for logged-in buyers
            return view('buyer.home');
        } else {
            // If not logged in, show the home page for non-logged-in users
            return view('buyer.pages.guest_home');
        }
    }
    public function products()
    {
        return view('buyer.pages.products');
    }
    public function productDetails()
    {
        return view('buyer.pages.product_details');
    }
    public function supplierProfile()
    {
        if (Auth::guard('buyer')->check()) {
            // If logged in, show the home page for logged-in buyers
            return view('buyer.home');
        } else {
            // If not logged in, show the home page for non-logged-in users
            return view('buyer.pages.supplier_profile');
        }
    }
}