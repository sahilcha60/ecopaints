<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Show all portfolios (Listing page)
     */
    public function index()
    {
        $portfolios = Portfolio::with('service')->get();

        // ✅ SEO: Portfolio Listing (Graphic, Web & Printing)
        SEOMeta::setTitle('Graphic, Web & Printing Portfolio | Sahil Shakya');

        SEOMeta::setDescription(
            'Explore my graphic design, web design, and printing portfolio showcasing branding, digital creatives, and high-quality print solutions for businesses.'
        );

        return view('frontend.portfolio.index', compact('portfolios'));
    }

    /**
     * Show single portfolio detail page
     */
    public function single($id)
    {
        $portfolio = Portfolio::with('service')->findOrFail($id);

        // ✅ SEO: Single Portfolio (from database)
        SEOMeta::setTitle(
            $portfolio->meta_title ?: $portfolio->title
        );

        SEOMeta::setDescription(
            $portfolio->meta_description
            ?: Str::limit(strip_tags($portfolio->description), 160)
        );

        return view('frontend.portfolio.single', compact('portfolio'));
    }

    /**
     * Filter portfolios by service
     */
    public function byService($serviceId)
    {
        $service = Service::findOrFail($serviceId);

        $portfolios = Portfolio::with('service')
            ->where('service_id', $serviceId)
            ->get();

        // ✅ SEO: Service-based Portfolio
        SEOMeta::setTitle($service->title.' Portfolio | VM Studio');

        SEOMeta::setDescription(
            'Browse my '.strtolower($service->title).' portfolio featuring creative projects, professional designs, and successful client work.'
        );

        return view('frontend.portfolio.index', compact('portfolios', 'service'));
    }
}
