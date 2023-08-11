<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     // Show home page
     public function dashboard()
     {
        return view('admin.pages.dashboard');
     }
}
