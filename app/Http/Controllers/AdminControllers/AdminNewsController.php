<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; // Assuming you have a Category model

class AdminNewsController extends Controller
{
    // Show category details
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category-details', compact('category'));
    }

    // Show category list
    public function index()
    {
        // Retrieve all categories from the database
        $categories = Category::paginate(10);

        return view('admin.pages.categories.index', compact('categories'));
    }

    // Show create category form
    public function create()
    {
        return view('admin.pages.categories.create');
    }

    // Store new category
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Create the category in the database
        Category::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category created successfully');
    }

    // Show edit category form
    public function edit($id)
    {
        // Retrieve the category by ID from the database
        $category = Category::find($id);

        return view('admin.pages.categories.edit', compact('category'));
    }

    // Update category data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Update the category data in the database
        $category = Category::find($id);
        $category->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated successfully');
    }

    // Delete category
    public function destroy($id)
    {
        // Find the category by ID
        $category = Category::find($id);

        // Delete the category
        $category->delete();

        // Redirect back with a success message
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
