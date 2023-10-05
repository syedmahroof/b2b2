<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buyer; // Assuming you have a Buyer model

class AdminBuyerController extends Controller
{
    public function show($id)
    {
        $buyer = Buyer::findOrFail($id);
        return view('admin.buyer-details', compact('buyer'));
    }

    // Show home page
    public function index()
    {
        // Retrieve all buyers from the database
        $buyers = Buyer::paginate(10);

        return view('admin.pages.buyers.index', compact('buyers'));
    }

    // Show create buyer form
    public function create()
    {
        return view('admin.pages.buyers.create');
    }

    // Store new buyer
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Create the buyer in the database
        Buyer::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.buyers.index')
            ->with('success', 'Buyer created successfully');
    }

    // Show edit buyer form
    public function edit($id)
    {
        // Retrieve the buyer by ID from the database
        $buyer = Buyer::find($id);

        return view('admin.pages.buyers.edit', compact('buyer'));
    }

    // Update buyer data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Update the buyer data in the database
        $buyer = Buyer::find($id);
        $buyer->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.buyers.index')
            ->with('success', 'Buyer updated successfully');
    }

    // Delete buyer
    public function destroy($id)
    {
        // Find the buyer by ID
        $buyer = Buyer::find($id);

        // Delete the buyer
        $buyer->delete();

        // Redirect back with a success message
        return redirect()->route('admin.buyers.index')
            ->with('success', 'Buyer deleted successfully');
    }
}
