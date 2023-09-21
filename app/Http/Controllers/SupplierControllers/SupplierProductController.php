<?php

namespace App\Http\Controllers\SupplierControllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class SupplierProductController extends Controller
{
    // Show a list of supplier products
    public function index()
    {
        $products = Product::paginate(10);
        return view('supplier.pages.products.index', compact('products'));
    }

    // Show the form for creating a new supplier product
    public function create()
    {
        return view('supplier.pages.products.create');
    }

    // Store a newly created supplier product in the database
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'sku' => 'required|string|unique:products',
        //     'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'min_order_quantity' => 'required|integer|min:1',
        //     'lead_time_days' => 'nullable|integer',
        //     'bulk_pricing' => 'nullable|json',
        //     'sample_available' => 'nullable|boolean',
        //     'customization_options' => 'nullable|string',
        //     'payment_terms' => 'nullable|string',
        //     'bulk_order_enquiry_link' => 'nullable|string',
        //     'bulk_order_available' => 'nullable|boolean',
        //     'custom_pricing' => 'nullable|json',
        //     'quote_system_integration' => 'nullable|string',
        //     'estimated_delivery_time' => 'nullable|integer',
        //     'manufacturing_lead_time' => 'nullable|integer',
        //     'certifications' => 'nullable|string',
        //     'recommended_use' => 'nullable|string',
        //     'safety_information' => 'nullable|string',
        //     'warranty_information' => 'nullable|string',
        //     'meta_title' => 'nullable|string',
        //     'meta_description' => 'nullable|string',
        //     'meta_keywords' => 'nullable|string',
        //     'canonical_url' => 'nullable|string',
        //     'schema_markup' => 'nullable|string',
        //     'og_title' => 'nullable|string',
        //     'og_description' => 'nullable|string',
        //     'og_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'twitter_card_title' => 'nullable|string',
        //     'twitter_card_description' => 'nullable|string',
        //     'twitter_card_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'sitemap_priority' => 'nullable|numeric|min:0|max:1',
        //     'sitemap_frequency' => 'nullable|in:always,hourly,daily,weekly,monthly,yearly,never',
        //     // Add more validation rules for other fields
        // ]);

        // Handle file upload for featured image
        if ($request->hasFile('featured_image')) {
            $featuredImagePath = $request->file('featured_image')->storeAs('public/products', uniqid() . '.' . $request->file('featured_image')->getClientOriginalExtension());
        } else {
            $featuredImagePath = null;
        }

      
        // Create a new SupplierProduct instance
        Product::create([
            'supplier_id' => auth()->guard('supplier')->user()->id,
            'name' => $request->input('name'),
            'sku' => $request->input('sku'),
            'featured_image' => $featuredImagePath,
            'min_order_quantity' => $request->input('min_order_quantity'),
            'lead_time_days' => $request->input('lead_time_days'),
            'bulk_pricing' => json_decode($request->input('bulk_pricing')),
            'sample_available' => $request->input('sample_available', false),
            'customization_options' => $request->input('customization_options'),
            'payment_terms' => $request->input('payment_terms'),
            'bulk_order_enquiry_link' => $request->input('bulk_order_enquiry_link'),
            'bulk_order_available' => $request->input('bulk_order_available', false),
            'custom_pricing' => json_decode($request->input('custom_pricing')),
            'quote_system_integration' => $request->input('quote_system_integration'),
            'estimated_delivery_time' => $request->input('estimated_delivery_time'),
            'manufacturing_lead_time' => $request->input('manufacturing_lead_time'),
            'certifications' => $request->input('certifications'),
            'recommended_use' => $request->input('recommended_use'),
            'safety_information' => $request->input('safety_information'),
            'warranty_information' => $request->input('warranty_information'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'canonical_url' => $request->input('canonical_url'),
            'schema_markup' => $request->input('schema_markup'),
            'og_title' => $request->input('og_title'),
            'og_description' => $request->input('og_description'),
            'og_image' => $featuredImagePath,
            'twitter_card_title' => $request->input('twitter_card_title'),
            'twitter_card_description' => $request->input('twitter_card_description'),
            'twitter_card_image' => $featuredImagePath,
            'sitemap_priority' => $request->input('sitemap_priority', 0.5),
            'sitemap_frequency' => $request->input('sitemap_frequency', 'weekly'),
            // Add more fields as needed
        ]);

        return redirect()->route('supplier.products.index')->with('success', 'Supplier Product created successfully');
    }

    // Show the details of a specific supplier product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    // Show the form for editing a specific supplier product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Update the specified supplier product in the database
    public function update(Request $request, $id)
    {
        // Validation rules for updating a product (similar to store method)

        $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku,' . $id,
            // Add more validation rules for other fields
        ]);

        $product = Product::findOrFail($id);

        // Update product data based on the provided fields (similar to store method)

        $product->name = $request->input('name');
        $product->sku = $request->input('sku');
        // Update other fields as needed

        // Handle file upload for featured image if a new one is provided
        if ($request->hasFile('featured_image')) {
            $featuredImagePath = $request->file('featured_image')->storeAs('public/products', uniqid() . '.' . $request->file('featured_image')->getClientOriginalExtension());
            $product->featured_image = $featuredImagePath;
        }

        $product->save();

        return redirect()->route('supplier.products.index')->with('success', 'Supplier Product updated successfully');
    }

    // Remove the specified supplier product from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete the featured image file
        if ($product->featured_image) {
            Storage::delete('public/products/' . $product->featured_image);
        }

        // Delete the product
        $product->delete();

        return redirect()->route('supplier.products.index')->with('success', 'Supplier Product deleted successfully');
    }
}
