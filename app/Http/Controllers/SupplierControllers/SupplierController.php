<?php

namespace App\Http\Controllers\SupplierControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function dashboard()
    {
       return view('supplier.pages.dashboard');
    }
}
