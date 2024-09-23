<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::with('category')->get(); 
        return view('admin.topics', compact('topics'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.topics.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $topic = new Topic();
        $topic->title = $request->title;
        $topic->content = $request->content;
        $topic->category_id = $request->category_id;
        $topic->user_id = Auth::id();
        $topic->is_trending = $request->has('is_trending');
        $topic->is_published = $request->has('is_published');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/topics'), $imageName);
            $topic->image = 'images/topics/' . $imageName;
        }

        $topic->save();

        return redirect()->route('admin.topics.index')->with('success', 'Topic created successfully.');
    }

   public function show(Topic $topic)
    {
        // Increment the view count
        $topic->increment('views');

        return view('admin.topics.topic_details', compact('topic'));
    }

    public function edit(Topic $topic)
    {
        $categories = Category::all();
        return view('admin.topics.edit', compact('topic', 'categories'));
    }

    public function update(Request $request, Topic $topic)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $topic->title = $request->title;
        $topic->content = $request->content;
        $topic->category_id = $request->category_id;
        $topic->is_trending = $request->has('is_trending');
        $topic->is_published = $request->has('is_published');
    
        if ($request->hasFile('image')) {
            // Delete old image
            if ($topic->image) {
                Storage::disk('public')->delete($topic->image);
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/topics'), $imageName);
            $topic->image = 'images/topics/' . $imageName;
        }
    
        $topic->save();
    
        return redirect()->route('admin.topics.index')->with('success', 'Topic updated successfully.');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topics.index')->with('success', 'Topic deleted successfully.');
    }
}