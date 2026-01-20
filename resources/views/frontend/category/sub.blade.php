@extends('frontend.layouts.master')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('storage/'.$category->image) }}); background-size: cover; background-position: center;">
        <div class="auto-container">
            <h2 style="color: #fff;">{{ $category->title }}</h2>
            <ul class="bread-crumb clearfix" style="color: #fff;">
                <li><a href="{{ route('homepage') }}" style="color: #fff;">Home</a></li>
                <li><a href="{{ route('category') }}" style="color: #fff;">Categories</a></li>
                <li>{{ $category->title }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Projects Three -->
    <section class="projects-three">
        <div class="outer-container">
            <div class="row clearfix">

                @if($subcategories && count($subcategories) > 0)
                    @foreach($subcategories as $key => $sub)
                        <div class="projects-block_three col-lg-4 col-md-6 col-sm-6">
                            <div class="projects-block_three-inner">
                                <div class="projects-block_three-image">
                                    <a href="{{ route('subcategory.products', ['category_slug' => $category->slug, 'subcategory_slug' => $sub->slug]) }}">
                                        <img src="{{ asset('storage/'.$sub->image) }}" alt="{{ $sub->title }}" />
                                    </a>
                                </div>
                                <div class="projects-block_three-content">
                                    <div class="projects-block_three-title">See our Products</div>
                                    <div class="projects-block_three-content_inner">
                                        <h4 class="projects-block_three-heading">
                                            <a href="{{ route('subcategory.products', ['category_slug' => $category->slug, 'subcategory_slug' => $sub->slug]) }}">
                                                {{ $sub->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No subcategories found.</p>
                @endif

            </div>
        </div>
    </section>
    <!-- End Projects Three -->

@endsection
