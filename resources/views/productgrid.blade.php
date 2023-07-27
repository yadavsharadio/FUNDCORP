@extends('main/master')
@push('title')
<title>Product Grid</title>
@endpush 
@section('content')

        <!-- content section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="shorting clearfix xs-margin-top-three">
                            <div class="col-md-8 col-sm-8 grid-nav">
                                <a href="{{url('/productlist')}}"><i class="fa fa-bars"></i></a>
                                <a href="{{url('/productgrid')}}"><i class="fa fa-th"></i></a>
                                <p class="text-uppercase letter-spacing-1">Showing 1–12 of 22 results</p>
                            </div>
                            <div class="col-md-3 col-sm-3 pull-right">
                                <div class="select-style input-round med-input shop-shorting-full no-border">
                                    <select>
                                        <option value="">Select sort by</option>
                                        <option value="">By popularity</option>
                                        <option value="">By rating</option>
                                        <option value="">Price: low to high</option>
                                        <option value="">Price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="product-listing margin-three">
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Gianvito Rossi</a></span>
                                    <span class="price black-text"><del>$750.00</del>$450</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <span class="onsale onsale-style-2">Sale</span>
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Givenchy Low</a></span>
                                    <span class="price black-text">$500</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Alexander McQueen</a></span>
                                    <span class="price black-text">$380</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Richard Nicoll</a></span>
                                    <span class="price black-text">$680</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Roland Mouret</a></span>
                                    <span class="price black-text">$980</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Preen Line</a></span>
                                    <span class="price black-text"><del>$750.00</del>$450</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <span class="onsale onsale-style-2">Sale</span>
                                    
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Balmain</a></span>
                                    <span class="price black-text">$350</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Valentino</a></span>
                                    <span class="price black-text">$370</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Asymmetric</a></span>
                                    <span class="price black-text">$370</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Bead-embellished</a></span>
                                    <span class="price black-text">$370</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Victoria Beckham</a></span>
                                    <span class="price black-text">$370</span>
                                    <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                            <!-- shop item -->
                            <div class="col-md-4 col-sm-6">
                                <div class="home-product text-center position-relative overflow-hidden margin-ten no-margin-top">
                                    <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                    <span class="product-name text-uppercase"><a href="shop-single-product.html">Leather shopper</a></span>
                                    <span class="price black-text">$370</span>
                                     <!-- product rating -->
                                    <div class="rating ">
                                        <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase ">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                                    </div>
                                    <!-- end product rating -->
                                    <div class="quick-buy">
                                        <div class="product-share">
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="#" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Compare"><i class="fa fa-refresh"></i></a>
                                            <a href="shop-cart.html" class="highlight-button-dark btn btn-small no-margin-right quick-buy-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end shop item -->
                        </div>
                        <!-- pagination -->
                        <div class="pagination margin-ten no-margin-bottom">
                            <a href="#"><img src="{{url('html/images/arrow-pre-small.png')}}" alt=""/></a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#" class="active">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#"><img src="{{url('html/images/arrow-next-small.png')}}" alt=""/></a>
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end content section -->
@endsection 