<?php

namespace App\Http\Controllers\BuyerControllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\News;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Supplier;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class BuyerController extends Controller
{

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getCategoriesWithChildren();
        $hotSellingProducts = Product::limit(12)->get();
        $sliders = Slider::limit(12)->get();
        $latestNews = News::limit(12)->get();
        
        $latestProducts = $specialOffers = $bestSellers = $featuredProducts = $suppliers = [];
    
        if (Auth::guard('buyer')->check()) {
            // Load buyer-specific data here
            $latestProducts = Product::latest()->limit(12)->get();
            $specialOfferProducts = Product::limit(12)->get();
            $bestSellers = Product::limit(12)->get();
            $featuredProducts = Product::limit(12)->get();
            $suppliers = Supplier::limit(12)->get();
        }
        
        if (Auth::guard('buyer')->check()) {
            return view('buyer.pages.home', compact('hotSellingProducts', 'categories', 'sliders', 'latestNews', 'latestProducts', 'specialOfferProducts', 'bestSellers', 'featuredProducts', 'suppliers'));
        } else {

            $latestProducts = Product::latest()->limit(12)->get();
            $specialOfferProducts = Product::limit(12)->get();
            $bestSellers = Product::limit(12)->get();
            $featuredProducts = Product::limit(12)->get();
            $suppliers = Supplier::limit(12)->get();

            return view('buyer.pages.guest_home', compact('hotSellingProducts', 'categories', 'sliders', 'latestNews', 'latestProducts', 'specialOfferProducts', 'bestSellers', 'featuredProducts', 'suppliers'));
        }
    }

        
    public function products()
    {
        return view('buyer.pages.products', compact('categories'));
    }
    
    public function about()
    {
        $categories = $this->categoryService->getCategoriesWithChildren(); // Fetch categories
        return view('buyer.pages.about',compact('categories'));
    
    }
    
    public function deliveryInformation()
    {
        return view('buyer.pages.delivery_information');
    }
    
    public function privacyPolicy()
    {
        $categories = $this->categoryService->getCategoriesWithChildren(); // Fetch categories
        return view('buyer.pages.privacy_policy');
    }
    
    public function brands()
    {
        return view('buyer.pages.brands');
    }
    
    public function contactUs()
    {
        $categories = $this->categoryService->getCategoriesWithChildren(); // Fetch categories
        return view('buyer.pages.contact_us',compact('categories'));
    
    }
    
    public function contactSave(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'form-name' => 'required|string|max:255',
            'form-email' => 'required|email|max:255',
            'form-subject' => 'required|string|max:255',
            'form-message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('your.form.route') // Replace with your form route
                ->withErrors($validator)
                ->withInput();
        }

        // Save the form data to the database
        $contact = new Contact();
        $contact->name = $request->input('form-name');
        $contact->email = $request->input('form-email');
        $contact->subject = $request->input('form-subject');
        $contact->message = $request->input('form-message');
        $contact->save();

        // Redirect back with a success message
        return redirect()->route('contact') // Replace with your form route
            ->with('success', 'Message sent successfully!');
    }


    public function returns()
    {
        return view('buyer.pages.returns');
    }
    
    public function siteMap()
    {
        return view('buyer.pages.site_map');
    }
    
    public function productDetails($id)
    {
        $categories = $this->categoryService->getCategoriesWithChildren(); 
        $product = Product::find($id); 
        return view('buyer.pages.product_details',compact('categories','product'));
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

    public function blogs()
    {
        // Paginate the blogs with a specified number of items per page (e.g., 10)
        $blogs = BlogPost::paginate(10);
        $categories = $this->categoryService->getCategoriesWithChildren();
        return view('buyer.pages.blogs.index', compact('blogs','categories'));
    }

   
    public function blogDetails($id)
    {
        // Fetch the specific blog entry
        $blog = BlogPost::find($id);

        // Paginate the blogs with a specified number of items per page (e.g., 5)
        $blogsForNavigation = BlogPost::where('id', '!=', $id)->paginate(5);
        $categories = $this->categoryService->getCategoriesWithChildren(); // Fe
        return view('buyer.pages.blogs.show', compact('blog', 'blogsForNavigation','categories'));
    }

}
