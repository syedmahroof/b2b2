<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq; // Assuming you have a Faq model

class AdminFaqController extends Controller
{
    // Show FAQ details
    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq-details', compact('faq'));
    }

    // Show FAQ list
    public function index()
    {
        // Retrieve all FAQs from the database
        $faqs = Faq::paginate(10);

        return view('admin.pages.faqs.index', compact('faqs'));
    }

    // Show create FAQ form
    public function create()
    {
        return view('admin.pages.faqs.create');
    }

    // Store new FAQ
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
            // Add more validation rules for other fields
        ]);

        // Create the FAQ in the database
        Faq::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ created successfully');
    }

    // Show edit FAQ form
    public function edit($id)
    {
        // Retrieve the FAQ by ID from the database
        $faq = Faq::find($id);

        return view('admin.pages.faqs.edit', compact('faq'));
    }

    // Update FAQ data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required',
            // Add more validation rules for other fields
        ]);

        // Update the FAQ data in the database
        $faq = Faq::find($id);
        $faq->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ updated successfully');
    }

    // Delete FAQ
    public function destroy($id)
    {
        // Find the FAQ by ID
        $faq = Faq::find($id);

        // Delete the FAQ
        $faq->delete();

        // Redirect back with a success message
        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ deleted successfully');
    }
}
