<?php

namespace App\Http\Controllers\SupplierControllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function dashboard()
    {
        return view('supplier.pages.dashboard');
    }

    public function profile()
    {
        $supplierId = auth()->guard('supplier')->user()->id;
        $supplier = Supplier::find($supplierId);
        return view('supplier.pages.profile', compact('supplier'));
    }

    public function updateProfile(Request $request)
    {
        // Validate the form data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255',
        //     'password' => 'required|string|min:8',
        //     'website' => 'nullable|string|max:255',
        //     'mobile_primary' => 'nullable|string|max:255',
        //     'mobile_secondary' => 'nullable|string|max:255',
        //     'officephone' => 'nullable|string|max:255',
        //     'address' => 'nullable|string|max:255',
        //     'zip' => 'nullable|string|max:255',
        //     'country' => 'nullable|string|max:255',
        //     'state' => 'nullable|string|max:255',
        //     'city' => 'nullable|string|max:255',
        //     'contact_person_name' => 'nullable|string|max:255',
        //     'contact_person_email' => 'nullable|string|email|max:255',
        //     'contact_person_phone' => 'nullable|string|max:255',
        //     'business_type' => 'nullable|string|max:255',
        //     'business_registration_number' => 'nullable|string|max:255',
        //     'company_info' => 'nullable|string',
        //     'instagram' => 'nullable|string|max:255',
        //     'facebook' => 'nullable|string|max:255',
        //     'twitter' => 'nullable|string|max:255',
        //     'linkedin' => 'nullable|string|max:255',
        //     'pinterest' => 'nullable|string|max:255',
        //     'youtube_channel' => 'nullable|string|max:255',
        //     'tiktok_profile' => 'nullable|string|max:255',
        //     'established_year' => 'nullable|integer',
        //     'logo' => 'nullable|string|max:255',
        //     'qr_code' => 'nullable|string|max:255',
        //     'license_number' => 'nullable|string|max:255',
        //     'about' => 'nullable|string',
        //     'verification_status' => 'nullable|string|max:255',
        //     'verified_date' => 'nullable|date',
        //     'verified_by' => 'nullable|string|max:255',
        //     'customer_rating' => 'nullable|numeric',
        //     'customer_rating_count' => 'nullable|integer',
        //     'total_visitors' => 'nullable|integer',
        //     'supplier_profile_link' => 'nullable|string|max:255',
        //     'points' => 'nullable|integer',
        //     'two_factor_enabled' => 'nullable|boolean',
        //     'total_employees' => 'nullable|integer',
        //     'meta_title' => 'nullable|string|max:255',
        //     'meta_description' => 'nullable|string|max:255',
        //     'meta_keywords' => 'nullable|string|max:255',
        //     'canonical_url' => 'nullable|string|max:255',
        //     'schema_markup' => 'nullable|string',
        //     'og_title' => 'nullable|string|max:255',
        //     'og_description' => 'nullable|string|max:255',
        //     'og_image' => 'nullable|string|max:255',
        //     'twitter_card_title' => 'nullable|string|max:255',
        //     'twitter_card_description' => 'nullable|string|max:255',
        //     'twitter_card_image' => 'nullable|string|max:255',
        //     'sitemap_priority' => 'nullable|numeric',
        //     'sitemap_frequency' => 'nullable|string|in:always,hourly,daily,weekly,monthly,yearly,never',
        //     'preferred_communication_start' => 'nullable|date_format:H:i',
        //     'preferred_communication_end' => 'nullable|date_format:H:i',
        //     'tax_id' => 'nullable|string|max:255',
        //     'referral_source' => 'nullable|string|max:255',
        //     'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        // ]);

        // Get the currently authenticated supplier
        $supplier = auth()->guard('supplier')->user();

        // Update the supplier's profile fields one by one
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->password = bcrypt($request->input('password')); // Make sure to hash the password
        $supplier->website = $request->input('website');
        $supplier->mobile_primary = $request->input('mobile_primary');
        $supplier->mobile_secondary = $request->input('mobile_secondary');
        $supplier->officephone = $request->input('officephone');
        $supplier->address = $request->input('address');
        $supplier->zip = $request->input('zip');
        $supplier->country = $request->input('country');
        $supplier->state = $request->input('state');
        $supplier->city = $request->input('city');
        $supplier->contact_person_name = $request->input('contact_person_name');
        $supplier->contact_person_email = $request->input('contact_person_email');
        $supplier->contact_person_phone = $request->input('contact_person_phone');
        $supplier->business_type = $request->input('business_type');
        $supplier->business_registration_number = $request->input('business_registration_number');
        $supplier->company_info = $request->input('company_info');
        $supplier->instagram = $request->input('instagram');
        $supplier->facebook = $request->input('facebook');
        $supplier->twitter = $request->input('twitter');
        $supplier->linkedin = $request->input('linkedin');
        $supplier->pinterest = $request->input('pinterest');
        $supplier->youtube_channel = $request->input('youtube_channel');
        $supplier->tiktok_profile = $request->input('tiktok_profile');
        $supplier->established_year = $request->input('established_year');
        // ...
    
        // Handle logo upload if a file was provided
        if ($request->hasFile('logo')) {

            // Get the uploaded file
            $logoFile = $request->file('logo');

            // Generate a unique filename for the logo
            $logoFileName = 'logo_' . rand(10000, 99999) . time() . '.' . $logoFile->getClientOriginalExtension();

            // Store the logo in a designated directory (e.g., storage/app/public/logos)
            $logoFile->storeAs('public/logos', $logoFileName);

            // Save the logo file name in the supplier's profile
            $supplier->logo = 'logos/'.$logoFileName;
        }

        $supplier->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('supplier.profile')->with('success', 'Profile updated successfully');
    }
}
