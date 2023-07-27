@extends('main/master')
@push('title')
    <title>product description</title>
@endpush
@section('content')

        <!-- head section -->
        <section class="content-top-margin page-title page-title-small border-bottom-light border-top-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li>Leather tote</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                    <div class="col-md-4 col-sm-5 wow fadeInUp header-nav text-right sm-margin-top-two" data-wow-duration="300ms">
                        <!-- next/previous -->
                        <a href="#" class="border-right"><i class="fa fa-angle-left"></i> Previous</a>
                        <a href="#">Next<i class="fa fa-angle-right"></i></a>
                        <!-- end next/previous -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->

        <!-- product selling moto -->
        <section class="page-title page-title-small border-bottom-light border-top-light">
            <div class="container">
                <div class="row"><div class="col-12 textAlignCenter">
                <h2 class="black-text">Buying this product will provide employment to rural artisans</h2>
                </div>
            </div>
            </div>
        </section>
        <!-- product selling moto -->

        <!-- content section -->
        <section>
            <div class="container">
                <div class="row alignItemCenter">
                    <!-- product images -->
                    <div class="col-md-6 col-sm-12 zoom-gallery sm-margin-bottom-ten">
                        <a href="http://placehold.it/583x583"><img src="https://drive.google.com/file/d/1Nd3oi3Uk584kBf_ANy6PA0plgFMaPkso/view" alt=""/></a>
                        <div class="products-thumb text-center">
                            <a href="http://placehold.it/583x583"><img src="https://drive.google.com/file/d/1Nd3oi3Uk584kBf_ANy6PA0plgFMaPkso/view" alt=""/></a>
                            <a href="http://placehold.it/583x583"><img src="https://drive.google.com/file/d/1Nd3oi3Uk584kBf_ANy6PA0plgFMaPkso/view" alt=""/></a>
                            <a href="http://placehold.it/583x583"><img src="https://drive.google.com/file/d/1Nd3oi3Uk584kBf_ANy6PA0plgFMaPkso/view" alt=""/></a>
                        </div>
                    </div>
                    <!-- end product images -->
                    <div class="col-md-5 col-sm-12 col-md-offset-1">
                        <!-- product name -->
                        <span class="product-name-details text-uppercase font-weight-600 letter-spacing-2 black-text">PRODUCTS NAME</span>
                        <!-- end product name -->
                        <!-- product rating -->
                        <div class="rating marginTopOne">
                            <i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><span class="rating-text text-uppercase">5 Reviews</span><span class="rating-text text-uppercase pull-right">Sold by <span class="black-text"><a href="#">Trust's name</a></span></span>
                        </div>
                        <!-- end product rating -->
                        <!-- product stock -->
                        <p class="text-uppercase letter-spacing-2 margin-one">In Stock / Shipping Available</p>
                        <!-- end product stock -->
                        <div class="separator-line bg-black no-margin-lr margin-three"></div>
                        <!-- product short description -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <!-- end product short description -->
                        <span class="price black-text title-small"><del>$750</del>$450</span>
                        <p>
                        Delivery fee: INR 100/- (By paying the delivery fee, you are providing employment to delivery person from low-income background).</p>
                        <div>
                            <!-- product color -->
                            <ul class="colors clearfix">
                                <li class="active"><a style="background:#f16b4e" href="#"></a></li>
                                <li><a style="background:#f69679" href="#"></a></li>
                                <li><a style="background:#fca95e" href="#"></a></li>
                                <li><a style="background:#7bbc72" href="#"></a></li>
                                <li><a style="background:#4fb2ac" href="#"></a></li>
                            </ul>
                            <!-- end product color -->
                            <!-- product size -->
                            <ul class="size clearfix size-details">
                                <li class="active"><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                                <li class="size-chart"><a href="#">Size Chart</a></li>
                            </ul>
                            <!-- end product size -->
                        </div>
                        <div class="col-md-3 col-sm-3 no-padding-left margin-four">
                            <div class="select-style med-input xs-med-input shop-shorting-details no-border-round">
                                <!-- product qty -->
                                <select>
                                    <option value="">QTY</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                                <!-- end product qty -->
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 no-padding margin-four">
                            <!-- add to bag button -->
                            <a class="btn btnMedium button" style="background-color: #F57E20" href="shop-cart.html"><i class="icon-basket"></i>Add To Cart</a>
                            <!-- end add to bag button -->
                             <!-- add to bag button -->
                             <a class="highlight-button-dark btn btnMedium button" href="shop-cart.html"><i class="icon-basket"></i>Buy Now</a>
                            <!-- end add to bag button -->
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-3 no-padding-left">
                            <!-- add to wishlist link -->
                            <a title="Add to Wishlist" href="#" class="text-uppercase text-small vertical-align-middle"><i class="fa fa-heart-o black-text"></i> Add to wishlist</a>
                            <!-- end add to wishlist link -->
                        </div>
                        <div class="col-md-8 col-sm-9 product-details-social no-padding">
                            <!-- social media sharing -->
                            <span class="black-text text-uppercase text-small vertical-align-middle margin-right-five">Share on</span>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <!-- end social media sharing -->
                        </div>
                        <div class="col-lg-12 no-padding marginTopThree">
                        <strong>Cashback, Offers, Rewards, & Points</strong>
                        <ul class="instructionsS">
                            <li><p>0.5 points (For every INR 200/- spent, you get 1 point. Can be used to make a purchase)</p></li>
                           <li><p>HDFC 10% cashback</p></li>
                           <li><p>10% off on Levis</p></li>
                           <li><p>20% off on Starbucks food and beverages</p></li>
                        </ul>
                        <strong>Return and replacement</strong>
                        <ul class="instructionsS">
                           <li><p>Since the products are sold by non-profit organizations, we do not return the product. However, in the case of a faulty/damaged product/goods being delivered to you, the NGO selling the product will be responsible to replace or return, or refund.</p></li>
                           <li><p>Replacement will be done by the NGO selling the product. Once you make the purchase, you will receive the contact details of the NGO.</p></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- tab -->
                        <div class="tab-style1">
                            <div class="col-md-12 col-sm-12 no-padding">
                                <!-- tab navigation -->
                                <ul class="nav nav-tabs nav-tabs-light text-left">
                                    <li class="active"><a href="#tab_sec1" data-toggle="tab">Details</a></li>
                                    <li><a href="#tab_sec2" data-toggle="tab">Washing Instructions</a></li>
                                    <li><a href="#tab_sec3" data-toggle="tab">Sizing</a></li>
                                    <li><a href="#tab_sec4" data-toggle="tab">Reviews (10)</a></li>
                                    <li><a href="#tab_sec5" data-toggle="tab">Terms & Conditions</a></li>
                                </ul>
                                <!-- tab end navigation -->
                            </div>
                            <!-- tab content section -->
                            <div class="tab-content">
                                <!-- tab content -->
                                <div class="tab-pane med-text fade in active" id="tab_sec1">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec2">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <ul class="instructions">
                                                <li><strong>Type:</strong> Shift Dresses</li>
                                                <li><strong>Fabric:</strong> Georgette</li>
                                                <li><strong>Sleeves:</strong> Half Sleeve</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <ul class="instructions">
                                                <li><strong>Neck:</strong> V Neck</li>
                                                <li><strong>Fit:</strong> Regular</li>
                                                <li><strong>Length:</strong> Mini</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 sm-margin-top-seven">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum has been the standard dummy text.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec3">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <ul class="instructions">
                                                <li><strong>Weight:</strong> 7.25 Kg</li>
                                                <li><strong>Dimensions:</strong> 90x60x90 Cm</li>
                                                <li><strong>Size:</strong> One Size Fits All</li>
                                                <li><strong>Color:</strong> White</li>
                                                <li><strong>Guarantee:</strong> 5 Years</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 sm-margin-top-seven">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane fade in" id="tab_sec4">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 review-main">
                                            <div class="review">
                                                <p class="letter-spacing-2 text-uppercase review-name"><strong>Nathan Ford,</strong> March 15, 2015</p>
                                                <p><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star-o black-text"></i><i class="fa black-text fa-star-o"></i></p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                                            </div>
                                            <div class="review">
                                                <p class="letter-spacing-2 text-uppercase review-name"><strong>Paul Scrivens,</strong> March 09, 2015</p>
                                                <p><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa fa-star black-text"></i><i class="fa black-text fa-star-o"></i></p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            </div>
                                            <ul class="list-inline comment-pagination">
                                                <li><a href="#" class="active">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">...</a></li>
                                                <li><a href="#">8</a></li>
                                                <li><a href="#">9</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-md-offset-1 blog-single-full-width-form sm-margin-top-seven">
                                            <div class="blog-comment-form">
                                                <!-- comment form -->
                                                <form>
                                                    <!-- input -->
                                                    <input type="text" name="name" placeholder="Name">
                                                    <!-- end input -->
                                                    <!-- input  -->
                                                    <input type="text" name="email" placeholder="Email">
                                                    <!-- end input -->
                                                    <!-- input  -->
                                                    <label class="rating">Rating</label>
                                                    <p class="add-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    <!-- end input -->
                                                    <!-- textarea  -->
                                                    <textarea name="comment" placeholder="Comment"></textarea>
                                                    <!-- end textarea  -->
                                                    <!-- button  -->
                                                    <input type="submit" name="send message" value="LEAVE RATING" class="highlight-button-black-border btn btn-small xs-no-margin-bottom">
                                                    <!-- end button  -->
                                                </form>
                                                <!-- end comment form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                                <!-- tab content -->
                                <div class="tab-pane med-text fade in " id="tab_sec5">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end tab content section -->
                        </div>
                        <!-- end tab -->
                    </div>
                </div>
            </div>
        </section>

        <section class="border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Related Products</h3>
                    </div>
                </div>
                <div class="row">
                    <!-- related products slider -->
                    <div id="shop-products" class="owl-carousel owl-theme dark-pagination owl-no-pagination owl-prev-next-simple">
                        <!-- shop item -->
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Richard Nicoll</a></span>
                                <span class="price black-text">$680</span>
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
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Roland Mouret</a></span>
                                <span class="price black-text">$980</span>
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
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="http://placehold.it/500x500" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Preen Line</a></span>
                                <span class="price black-text">$750</span>
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
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="http://placehold.it/600x500" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Balmain</a></span>
                                <span class="price black-text">$350</span>
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
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="http://placehold.it/600x500" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Dolce & Gabbana</a></span>
                                <span class="price black-text">$700</span>
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
                        <div class="item">
                            <div class="home-product text-center position-relative overflow-hidden">
                                <a href="shop-single-product.html"><img src="http://placehold.it/600x500" alt=""/></a>
                                <span class="product-name text-uppercase"><a href="shop-single-product.html">Valentino</a></span>
                                <span class="price black-text">$370</span>
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
                    <!-- end related products slider -->
                </div>
            </div>
        </section>
        <!-- end content section -->

@endsection