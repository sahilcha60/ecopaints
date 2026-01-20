@extends('frontend.layouts.master')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('images/background/24.jpg') }})">
        <div class="auto-container">
            <h2>Our Categories</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li>Categories</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Categories Section -->
    <section class="projects-four">
        <div class="auto-container">
            <div class="row clearfix">

                @if($categories && count($categories) > 0)
                    @foreach($categories as $cat)
                        <div class="projects-block_one col-lg-4 col-md-6 col-sm-6">
                            <div class="projects-block_one-inner">
                                <a href="{{ route('category.sub', $cat->slug) }}">
                                    <div class="projects-block_one-image">
                                        <img src="{{ asset('storage/'.$cat->image) }}" alt="{{ $cat->title }}" />
                                    </div>
                                    <div class="projects-block_one-content" style="background-image:url({{ asset('images/background/pattern-5.png') }});">
                                        <div class="projects-block_one-title">{{ $cat->title }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- End Categories Section -->

    @include('frontend.components.features')
    @include('frontend.components.cta')

@endsection
