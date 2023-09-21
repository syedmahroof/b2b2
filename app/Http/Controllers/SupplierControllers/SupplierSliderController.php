<?php

namespace App\Http\Controllers\SupplierControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupplierSlider;

class SupplierSliderController extends Controller
{
    // Show a list of supplier sliders
    public function index()
    {
        $sliders = SupplierSlider::paginate(10);
        return view('supplier.pages.sliders.index', compact('sliders'));
    }

    // Show the form for creating a new supplier slider
    public function create()
    {
        return view('supplier.pages.sliders.create');
    }

    // Store a newly created supplier slider in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'attachment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Handle file upload
        $imagePath = $request->file('attachment')->storeAs('public/sliders', uniqid() . '.' . $request->file('attachment')->getClientOriginalExtension());

        // Create a new SupplierSlider instance
        SupplierSlider::create([
            'title' => $request->input('title'),
            'attachment' => basename($imagePath),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'Supplier Slider created successfully');
    }

    // Show the details of a specific supplier slider
    public function show($id)
    {
        $slider = SupplierSlider::findOrFail($id);
        return view('admin.sliders.show', compact('slider'));
    }

    // Show the form for editing a specific supplier slider
    public function edit($id)
    {
        $slider = SupplierSlider::findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));
    }

    // Update the specified supplier slider in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $slider = SupplierSlider::findOrFail($id);

        // Update the slider data
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');

        // Handle file upload if a new attachment is provided
        if ($request->hasFile('attachment')) {
            $request->validate([
                'attachment' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Delete the old attachment file
            Storage::delete('public/sliders/' . $slider->attachment);

            // Upload the new attachment file
            $imagePath = $request->file('attachment')->storeAs('public/sliders', uniqid() . '.' . $request->file('attachment')->getClientOriginalExtension());
            $slider->attachment = basename($imagePath);
        }

        $slider->save();

        return redirect()->route('admin.sliders.index')->with('success', 'Supplier Slider updated successfully');
    }

    // Remove the specified supplier slider from the database
    public function destroy($id)
    {
        $slider = SupplierSlider::findOrFail($id);

        // Delete the attachment file
        Storage::delete('public/sliders/' . $slider->attachment);

        // Delete the slider
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Supplier Slider deleted successfully');
    }
}
