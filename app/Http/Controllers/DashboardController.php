<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('welcome', compact('blogs', 'categories'));
    }
}
