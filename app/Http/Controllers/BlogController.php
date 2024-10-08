<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Fetch all blogs
        $categories = Category::all(); // Fetch all categories
        return view('admin.blogs', compact('blogs', 'categories')); // Pass them to the view
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' =>    'required|string',
            'images' => 'required|array',
            'category' => 'required|string|max:255',
        ]);

        // Handle image uploads
        $images = [];
        foreach ($request->file('images') as $image) {
            $uniqueName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->move(public_path('uploads'), $uniqueName);
            $images[] = 'uploads/' . $uniqueName;
        }

        // Create a new blog post
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->slug = Str::slug($request->input('title')) . '-' . Str::random(8);
        $blog->description = $request->input('description');
        $blog->content = $request->input('content');
        $blog->images = json_encode($images);
        $blog->category = $request->input('category');
        $blog->save();

        return redirect()->route('admin.blog.show')->with('success', 'Blog post created successfully')->with('blogs', Blog::all());
    }
    public function delete(Request $request)
    {
        $blog = Blog::findOrFail($request->id);

        $images = json_decode($blog->images);

        foreach ($images as $image) {
            File::delete(public_path('uploads/' . $image));
        }
        $blog->delete();
        //delete product from database
        return response()->json(['msg' => 'success', 'response' => 'Deleted successfully.']);
    }

    public function categoryblog($id)
    {
        $blogs = Blog::where('category', $id)->get();
        $categories = Category::all();
        $category = Category::findOrFail($id);
        return view('category_blogs', compact('blogs', 'categories', 'category'));
    }

    public function blogdetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $randomblogs = Blog::inRandomOrder()->limit(3)->get();
        $categories = Category::all();
        return view('blog_details', compact('blog', 'categories', 'randomblogs'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->get();
        $categories = Category::all();
        return view('search_blog', compact('blogs', 'categories'));
    }
}
