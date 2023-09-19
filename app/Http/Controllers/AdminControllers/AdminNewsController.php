<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News; // Assuming you have a News model

class AdminNewsController extends Controller
{
    // Show news details
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news-details', compact('news'));
    }

    // Show news list
    public function index()
    {
        // Retrieve all news articles from the database
        $news = News::paginate(10);

        return view('admin.pages.news.index', compact('news'));
    }

    // Show create news form
    public function create()
    {
        return view('admin.pages.news.create');
    }

    // Store new news article
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
            'sub_title' => 'nullable|string|max:255', // Validate the sub_title field
            // Add more validation rules for other fields
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public'); // Adjust the storage path
            $validatedData['image'] = $imagePath;
        }

        // Create the news article in the database
        News::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.news.index')
            ->with('success', 'News article created successfully');
    }

    // Show edit news form
    public function edit($id)
    {
        // Retrieve the news article by ID from the database
        $news = News::find($id);

        return view('admin.pages.news.edit', compact('news'));
    }

    // Update news article data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
            'sub_title' => 'nullable|string|max:255', // Validate the sub_title field
            // Add more validation rules for other fields
        ]);

        // Retrieve the news article by ID from the database
        $news = News::find($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public'); // Adjust the storage path
            $validatedData['image'] = $imagePath;

            // Delete the old image if it exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
        }

        // Update the news article data in the database
        $news->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.news.index')
            ->with('success', 'News article updated successfully');
    }

    // Delete news article
    public function destroy($id)
    {
        // Find the news article by ID
        $news = News::find($id);

        // Delete the news article and its associated image if it exists
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        // Redirect back with a success message
        return redirect()->route('admin.news.index')
            ->with('success', 'News article deleted successfully');
    }
}
