<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    
    public function create()
    {
        return view('admin.categories.create');
    }
    
    public function store(Request $request)
    {
        \Log::info('Category store method called');
        \Log::info('Request data: ' . json_encode($request->all()));
    
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);
    
        \Log::info('Validated data: ' . json_encode($validated));
    
        try {
            $category = Category::create($validated);
            \Log::info('Category created: ' . $category->id);
            return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            \Log::error('Error creating category: ' . $e->getMessage());
            return back()->withInput()->withErrors(['error' => 'Failed to create category. ' . $e->getMessage()]);
        }
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);
    
        $category->update($validatedData);
    
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }

    public function topics()
{
    return $this->hasMany(Topic::class);
}

public function show(Category $category)
{
    $topics = $category->topics()->paginate(10); // Adjust the number as needed
    return view('categories.show', compact('category', 'topics'));
}

}

