@extends('frontend.layouts.master')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('storage/'.$product->cover_image) }}); background-size: cover; background-position: center;">
        <div class="auto-container">
            <h2>{{ $product->title }}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li>
                    <a href="{{ route('category.sub', $product->category->slug) }}">
                        {{ $product->category->title }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('subcategory.products', ['category_slug' => $product->category->slug, 'subcategory_slug' => $product->subcategory->slug]) }}">
                        {{ $product->subcategory->title }}
                    </a>
                </li>
                <li>{{ $product->title }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Shop Detail -->
    <section class="shop-detail">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="shop-detail_gallery-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                        </figure>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="shop-detail_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3 class="shop-detail_title">{{ $product->title }}</h3>

                        <!-- Short Description -->
                        <div class="shop-detail_text">{!!  $product->short_description  !!}</div>
                    </div>
                </div>
            </div>

            <!-- Description & Reviews -->
            <div class="lower-box">
                <div class="product-info-tabs">
                    <div class="prod-tabs tabs-box">

                        <!-- Tab Buttons -->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-info" class="tab-btn active-btn">Description</li>
                            <li data-tab="#prod-features" class="tab-btn">Features</li>
                            <li data-tab="#prod-steps" class="tab-btn">Steps</li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="tabs-content">

                            <!-- Description -->
                            <div class="tab active-tab" id="prod-info">
                                <div class="content">{!! $product->full_description !!}</div>
                            </div>

                            <!-- Features -->
                            <div class="tab" id="prod-features">
                                <div class="content">
                                    @if($product->features && $product->features->count() > 0)
                                        <ul>
                                            @foreach($product->features as $feature)
                                                <li>
                                                    @if($feature->icon)
                                                        <img src="{{ asset('storage/'.$feature->icon) }}" alt="{{ $feature->title }}" style="width:24px; height:24px; margin-right:5px;">
                                                    @endif
                                                    <strong>{{ $feature->title }}</strong>: {!! $feature->description !!}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No features available.</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Steps -->
                            <div class="tab" id="prod-steps">
                                <div class="content">
                                    @if($product->steps && $product->steps->count() > 0)
                                        <ul>
                                            @foreach($product->steps as $step)
                                                <li>
                                                    <strong>{{ $step->title }}</strong>: {{ $step->step }}
                                                    @if($step->coat)
                                                        (Coat: {{ $step->coat }})
                                                    @endif
                                                    @if($step->product_list)
                                                        <br>Products: {{ $step->product_list }}
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No steps available.</p>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
