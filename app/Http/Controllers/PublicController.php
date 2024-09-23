<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;

class PublicController extends Controller
{
    public function index()
    {
        try {
            // Fetch categories with their 3 most recent topics
            $categories = Category::with(['topics' => function ($query) {
                $query->latest()->take(3);
            }])
            ->take(3)
            ->get();

            // Fetch the two most viewed topics
            $mostViewedTopics = Topic::orderBy('views', 'desc')
                                     ->with('category')
                                     ->take(2)
                                     ->get();

            // Fetch 3 recent testimonials for the homepage
            $testimonials = Testimonial::where('is_published', true)
                                       ->latest()
                                       ->take(3)
                                       ->get();

            Log::info('Fetched data for homepage', [
                'categories' => $categories->count(),
                'mostViewedTopics' => $mostViewedTopics->count(),
                'testimonials' => $testimonials->count()
            ]);

            return view('public.index', compact('categories', 'mostViewedTopics', 'testimonials'));
        } catch (\Exception $e) {
            Log::error('Error loading homepage: ' . $e->getMessage());
            return view('public.error')->with('error', 'An error occurred while loading the homepage. Please try again later.');
        }
    }

    public function topicsListing()
    {
        try {
            $topics = Topic::with('category')->paginate(3); // Changed from 10 to 3
            $trendingTopics = Topic::where('is_trending', true)
                                   ->with('category')
                                   ->take(4)
                                   ->get();
            return view('public.topics-listing', compact('topics', 'trendingTopics'));
        } catch (\Exception $e) {
            Log::error('Error loading topics listing: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while loading the topics. Please try again.');
        }
    }

    public function showTopic(Topic $topic)
    {
        try {
            $topic->increment('views');
            return view('public.topics-detail', compact('topic'));
        } catch (\Exception $e) {
            Log::error('Error showing topic: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while loading the topic. Please try again.');
        }
    }

    public function showCategory(Category $category)
    {
        try {
            $topics = $category->topics()->paginate(9);
            return view('public.category-detail', compact('category', 'topics'));
        } catch (\Exception $e) {
            Log::error('Error showing category: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while loading the category. Please try again.');
        }
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function testimonials()
    {
        try {
            // Fetch all published testimonials for the dedicated testimonials page
            $testimonials = Testimonial::where('is_published', true)
                                       ->latest()
                                       ->paginate(10);
            return view('public.testimonials', compact('testimonials'));
        } catch (\Exception $e) {
            Log::error('Error loading testimonials page: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while loading the testimonials. Please try again.');
        }
    }


}