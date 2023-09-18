<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; // Assuming you have a Slider model

class AdminSliderController extends Controller
{
    // Show slider details
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider-details', compact('slider'));
    }

    // Show slider list
    public function index()
    {
        // Retrieve all sliders from the database
        $sliders = Slider::paginate(10);

        return view('admin.pages.sliders.index', compact('sliders'));
    }

    // Show create slider form
    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    // Store new slider
    public function store(Request $request)
    {
        // Validate the request data
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'attachment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'description' => 'required|string',
        // ]);

        // Handle file upload
        $imagePath = $request->file('attachment')->storeAs('public/sliders', uniqid() . '.' . $request->file('attachment')->getClientOriginalExtension());

        // Save the slider data to the database
        Slider::create([
            'title' => $request->input('title'),
            'attachment' => basename($imagePath),
            'description' => $request->input('description'),
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully');
    }

    // Show edit slider form
    public function edit($id)
    {
        // Retrieve the slider by ID from the database
        $slider = Slider::find($id);

        return view('admin.pages.sliders.edit', compact('slider'));
    }

    // Update slider data
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules for other fields
        ]);

        // Update the slider data in the database
        $slider = Slider::find($id);
        $slider->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider updated successfully');
    }

    // Delete slider
    public function destroy($id)
    {
        // Find the slider by ID
        $slider = Slider::find($id);

        // Delete the slider
        $slider->delete();

        // Redirect back with a success message
        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider deleted successfully');
    }
}
