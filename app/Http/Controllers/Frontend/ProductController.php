<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use SEOMeta;

class ProductController extends Controller
{
    // Show all categories
    public function subcategoryProducts($category_slug, $subcategory_slug)
    {
        // Get Category
        $category = Category::where('slug', $category_slug)->firstOrFail();

        // Get Subcategory
        $subcategory = SubCategory::where('slug', $subcategory_slug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        // Get Products with relations loaded
        $products = Product::with(['category', 'subcategory'])
            ->where('sub_category_id', $subcategory->id)
            ->get();

        return view('frontend.product.index', compact('category', 'subcategory', 'products'));
    }

    // Show single product by slug
    public function single($category_slug, $subcategory_slug, $product_slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();

        $subcategory = SubCategory::where('slug', $subcategory_slug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        // Eager load features and steps
        $product = Product::with(['features', 'steps'])
            ->where('slug', $product_slug)
            ->where('sub_category_id', $subcategory->id)
            ->firstOrFail();

        return view('frontend.product.single', compact('category', 'subcategory', 'product'));
    }
}
