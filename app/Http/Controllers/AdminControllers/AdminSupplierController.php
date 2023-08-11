<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class AdminSupplierController extends Controller
{
    // Show home page
    public function index()
    {
        // Retrieve all suppliers from the database
        $suppliers = Supplier::all();

        return view('admin.pages.suppliers.index', compact('suppliers'));
    }

    // Show create supplier form
    public function create()
    {
        return view('admin.pages.suppliers.create');
    }

    // Store new supplier
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Create the supplier in the database
        Supplier::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.suppliers.index')
            ->with('success', 'Supplier created successfully');
    }

    // Show edit supplier form
    public function edit($id)
    {
        // Retrieve the supplier by ID from the database
        $supplier = Supplier::find($id);

        return view('admin.pages.suppliers.edit', compact('supplier'));
    }

    // Update supplier data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Update the supplier data in the database
        $supplier = Supplier::find($id);
        $supplier->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.suppliers.index')
            ->with('success', 'Supplier updated successfully');
    }

    // Delete supplier
    public function destroy($id)
    {
        // Find the supplier by ID
        $supplier = Supplier::find($id);

        // Delete the supplier
        $supplier->delete();

        // Redirect back with a success message
        return redirect()->route('admin.suppliers.index')
            ->with('success', 'Supplier deleted successfully');
    }
}