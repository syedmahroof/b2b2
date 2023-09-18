<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        if (Auth::guard('buyer')->check()) {
            $hotSellingProducts = Product::limit(12)->get();
            $sliders = Slider::limit(12)->get();
            $categories = $this->categoryService->getCategoriesWithChildren(); // Fetch categories
            return view('buyer.pages.home', compact('hotSellingProducts', 'categories','sliders')); // Pass categories to the view
        } else {
            $categories = $this->categoryService->getCategoriesWithChildren(); // Fetch categories
            $hotSellingProducts = Product::limit(12)->get();
            $sliders = Slider::limit(12)->get();
            return view('buyer.pages.guest_home', compact('hotSellingProducts','categories','sliders'));
        }
    }

        
    public function products()
    {
        return view('buyer.pages.products');
    }
    
    public function about()
    {
        return view('buyer.pages.about');
    }
    
    public function deliveryInformation()
    {
        return view('buyer.pages.delivery_information');
    }
    
    public function privacyPolicy()
    {
        return view('buyer.pages.privacy_policy');
    }
    
    public function brands()
    {
        return view('buyer.pages.brands');
    }
    
    public function contactUs()
    {
        return view('buyer.pages.contact_us');
    }
    
    public function returns()
    {
        return view('buyer.pages.returns');
    }
    
    public function siteMap()
    {
        return view('buyer.pages.site_map');
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
