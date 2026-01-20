<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use SEOMeta;

class CategoryController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Contact Sahil Shakya | Personal Portfolio');

        $categories = Category::all();

        return view('frontend.category.index', compact('categories'));
    }

    public function slug($slug)
    {
        // Find category by slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Fetch subcategories related to this category
        $subcategories = SubCategory::where('category_id', $category->id)->get();

        return view('frontend.category.sub', compact('category', 'subcategories'));
    }
}
