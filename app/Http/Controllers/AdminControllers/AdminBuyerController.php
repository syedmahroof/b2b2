<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBuyerController extends Controller
{
     // Show home page
     public function index()
     {
        return view('admin.pages.dashboard');
     }
}
