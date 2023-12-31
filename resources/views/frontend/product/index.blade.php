@extends('frontend.master')

@section('title','Product-View')

@section('content')
    


<div class="maincontent-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="latest-product">
                <h2 class="section-title">Latest Products</h2>
                <div class="product-carousel">

                    @foreach ($products as $product)
                    <div class="single-product">
                        <div class="product-f-image">
                            <img src="{{asset($product->image)}}" alt="">

                            <div class="product-hover">
                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                            </div>
                        </div>
                        
                        <h2><a href="single-product.html">{{$product->name}}</a></h2>
                        
                        <div class="product-carousel-price">
                            <ins>${{$product->price}}</ins>
                             {{-- <del>$100.00</del> --}}
                        </div> 
                    </div>
                    @endforeach
                    

                  

                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End main content area -->

<div class="brands-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="brand-wrapper">
                <div class="brand-list">
                    <img src="{{asset('/')}}frontend_assets/img/brand1.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand2.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand3.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand4.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand5.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand6.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand1.png" alt="">
                    <img src="{{asset('/')}}frontend_assets/img/brand2.png" alt="">                            
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End brands area -->

<div class="product-widget-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="single-product-widget">
                <h2 class="product-wid-title">Top Sellers</h2>
                <a href="" class="wid-view-more">View All</a>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Apple new mac book 2015</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-product-widget">
                <h2 class="product-wid-title">Recently Viewed</h2>
                <a href="#" class="wid-view-more">View All</a>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-product-widget">
                <h2 class="product-wid-title">Top New</h2>
                <a href="#" class="wid-view-more">View All</a>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
                <div class="single-wid-product">
                    <a href="single-product.html"><img src="{{asset('/')}}frontend_assets/img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>$400.00</ins> <del>$425.00</del>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End product widget area -->
@endsection