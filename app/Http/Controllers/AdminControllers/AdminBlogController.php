<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost; // Assuming you have a BlogPost model

class AdminBlogController extends Controller
{
    // Show blog post details
    public function show($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        return view('admin.blog-details', compact('blogPost'));
    }

    // Show blog post list
    public function index()
    {
        // Retrieve all blog posts from the database
        $blogPosts = BlogPost::paginate(10);

        return view('admin.pages.blog.index', compact('blogPosts'));
    }

    // Show create blog post form
    public function create()
    {
        return view('admin.pages.blog.create');
    }

    // Store new blog post
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Add more validation rules for other fields
        ]);

        // Create the blog post in the database
        BlogPost::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post created successfully');
    }

    // Show edit blog post form
    public function edit($id)
    {
        // Retrieve the blog post by ID from the database
        $blogPost = BlogPost::find($id);

        return view('admin.pages.blog.edit', compact('blogPost'));
    }

    // Update blog post data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Add more validation rules for other fields
        ]);

        // Update the blog post data in the database
        $blogPost = BlogPost::find($id);
        $blogPost->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post updated successfully');
    }

    // Delete blog post
    public function destroy($id)
    {
        // Find the blog post by ID
        $blogPost = BlogPost::find($id);

        // Delete the blog post
        $blogPost->delete();

        // Redirect back with a success message
        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog post deleted successfully');
    }
}
