<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use SEOMeta;

class MainController extends Controller
{
    public function homepage()
    {
        // Set SEO title
        SEOMeta::setTitle('Sahil Shakya | Personal Portfolio | Web & Graphic Designer');
        SEOMeta::setDescription('Explore the personal portfolio of Sahil Shakya, showcasing creative web and graphic design projects, branding, and marketing solutions.');

        return view('frontend.homepage');
    }

    public function about()
    {
        SEOMeta::setTitle('About Sahil Shakya | Personal Portfolio');
        SEOMeta::setDescription('Learn more about Sahil Shakya, a passionate web and graphic designer, his skills, experience, and journey in creating impactful digital experiences.');
        $experiences = Experience::orderBy('id', 'desc')->get();
        $skills = Skill::orderBy('percentage', 'desc')->get();
        $educations = Education::where('status', 1)->get();

        return view('frontend.about', compact('experiences', 'skills', 'educations'));
    }

    public function contact()
    {
        SEOMeta::setTitle('Contact Sahil Shakya | Personal Portfolio');

        return view('frontend.contact');
    }
}
