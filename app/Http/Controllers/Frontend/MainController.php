<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use SEOMeta;

class MainController extends Controller
{
    public function homepage()
    {
        // Set SEO title
        SEOMeta::setTitle('Sahil Shakya | Personal Portfolio | Web & Graphic Designer');
        SEOMeta::setDescription('Explore the personal portfolio of Sahil Shakya, showcasing creative web and graphic design projects, branding, and marketing solutions.');
        $categories = Category::all();

        return view('frontend.homepage', compact('categories'));
    }

    public function about()
    {
        SEOMeta::setTitle('About Sahil Shakya | Personal Portfolio');
        SEOMeta::setDescription('Learn more about Sahil Shakya, a passionate web and graphic designer, his skills, experience, and journey in creating impactful digital experiences.');
        $categories = Category::all();

        return view('frontend.about', compact('categories'));
    }

    public function contact()
    {
        SEOMeta::setTitle('Contact Sahil Shakya | Personal Portfolio');

        return view('frontend.contact');
    }


}
