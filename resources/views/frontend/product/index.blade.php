@extends('frontend.layouts.master')

@section('content')

    <!-- Page Title with Subcategory Image -->
    <section class="page-title" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('storage/'.$subcategory->image) }}); background-size: cover; background-position: center;">
        <div class="auto-container">
            <h2>{{ $subcategory->title }}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li>{{ $subcategory->title }}</li>
            </ul>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="shop-two">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach($products as $product)
                    <div class="shop-block_one col-lg-4 col-md-6 col-sm-6">
                        <div class="shop-block_one-inner">
                            <div class="shop-block_one-image">
                                <a href="{{ route('product.single', [
                                    'category_slug' => $product->subcategory->category->slug,
                                    'subcategory_slug' => $product->subcategory->slug,
                                    'product_slug' => $product->slug
                                ]) }}">
                                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                                </a>
                            </div>
                            <div class="shop-block_one-content">
                                <<a class="shop-block_one-cart" href="{{ route('product.single', [
                                        'category_slug' => $product->subcategory->category->slug,
                                        'subcategory_slug' => $product->subcategory->slug,
                                        'product_slug' => $product->slug
                                    ]) }}">See Product <i class="flaticon-next"></i></a>
                                <h4 class="shop-block_one-heading">
                                    <a href="{{ route('product.single', [
                                        'category_slug' => $product->subcategory->category->slug,
                                        'subcategory_slug' => $product->subcategory->slug,
                                        'product_slug' => $product->slug
                                    ]) }}">{{ $product->title }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
