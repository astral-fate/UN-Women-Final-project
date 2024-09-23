<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
        ]);
    
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->content = $request->content;
        $testimonial->is_published = $request->has('is_published');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/testimonials'), $imageName);
            $testimonial->image = 'images/testimonials/' . $imageName;
        }
    
        $testimonial->save();
    
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
        ]);

        try {
            $testimonial->name = $request->name;
            $testimonial->content = $request->content;
            $testimonial->is_published = $request->has('is_published');

            if ($request->hasFile('image')) {
                if ($testimonial->image) {
                    Storage::disk('public')->delete($testimonial->image);
                }
                $imagePath = $request->file('image')->store('testimonials', 'public');
                $testimonial->image = $imagePath;
            }

            $testimonial->save();

            return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating testimonial: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while updating the testimonial. Please try again.');
        }
    }

    public function destroy(Testimonial $testimonial)
    {
        try {
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            $testimonial->delete();
            return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting testimonial: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while deleting the testimonial. Please try again.');
        }
    }
}