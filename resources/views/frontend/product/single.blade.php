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
                                        <div class="row">
                                            @foreach($product->features as $feature)
                                                <div class="col-lg-4 col-md-6 col-sm-12 text-center" style="margin-bottom: 30px;">
                                                    @if($feature->icon)
                                                        <div style="margin-bottom: 15px;">
                                                            <img src="{{ asset('storage/'.$feature->icon) }}" alt="{{ $feature->title }}" style="width:64px; height:64px; object-fit: contain;">
                                                        </div>
                                                    @endif
                                                    <h5 style="font-weight: bold; margin-bottom: 10px;">{{ $feature->title }}</h5>
                                                    <div style="font-weight: normal;">
                                                        {!! $feature->description !!}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p>No features available.</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Steps -->
                            <div class="tab" id="prod-steps">
                                <div class="content">
                                    @if($product->steps && $product->steps->count() > 0)
                                        <div class="row">
                                            @foreach($product->steps as $step)
                                                @php
                                                    $stepProduct = null;
                                                    if($step->product_list) {
                                                        $stepProduct = \App\Models\Product::find($step->product_list);
                                                    }
                                                @endphp
                                                <div class="col-lg-3 col-md-6 col-sm-12 text-center" style="margin-bottom: 30px;">
                                                    <div style="color: #888; font-size: 13px; font-weight: 500; text-transform: uppercase; margin-bottom: 5px;">
                                                        STEP {{ str_pad($step->step, 2, '0', STR_PAD_LEFT) }}
                                                    </div>
                                                    <h6 style="font-weight: 700; text-transform: uppercase; color: #444; margin-bottom: 20px; font-size: 15px; letter-spacing: 0.5px;">
                                                        {{ $step->title }}
                                                    </h6>
                                                    
                                                    <div style="width: 220px; height: 220px; background-color: #ebebeb; border-radius: 50%; margin: 0 auto 20px auto; display: flex; align-items: center; justify-content: center; position: relative;">
                                                        @if($stepProduct && $stepProduct->image)
                                                            <img src="{{ asset('storage/'.$stepProduct->image) }}" alt="{{ $stepProduct->title }}" style="max-height: 180px; max-width: 180px; object-fit: contain; position: relative; z-index: 2; margin-top: -30px;">
                                                        @else
                                                            <div style="color: #aaa; text-transform: uppercase; font-size: 12px;">No Image</div>
                                                        @endif
                                                    </div>
                                                    
                                                    @if($stepProduct)
                                                        <div style="color: #777; font-size: 14px; margin-bottom: 5px;">
                                                            {{ $stepProduct->title }}
                                                        </div>
                                                    @elseif($step->product_list)
                                                        <div style="color: #777; font-size: 14px; margin-bottom: 5px;">
                                                            {{ $step->product_list }}
                                                        </div>
                                                    @endif
                                                    
                                                    @if($step->coat)
                                                        <div style="font-weight: 600; font-size: 15px; color: #333;">
                                                            {{ $step->coat }} COAT{{ $step->coat > 1 ? 'S' : '' }}
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
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
