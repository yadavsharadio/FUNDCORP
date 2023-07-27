@extends('main/master')
@push('title')
  <title>home</title>
@endpush
@section('content')
 <!-- slider -->
 <section id="slider" class="no-padding">
            <div id="owl-demo" class="owl-carousel owl-theme light-pagination square-pagination dark-pagination-without-next-prev-arrow main-slider">
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('http://placehold.it/1920x1100');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle slider-text-middle6 padding-left-right-px wow fadeInUp">
                                    <span class="slider-title-big6 white-text text-uppercase font-weight-700 letter-spacing-3">First Slide</span>
                                    <span class="white-text text-small text-uppercase letter-spacing-10 margin-three no-margin-bottom display-block xs-letter-spacing-6">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('http://placehold.it/1920x1100');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle slider-text-middle6 padding-left-right-px wow fadeInUp">
                                    <span class="slider-title-big6 white-text text-uppercase font-weight-700 letter-spacing-3">Second Slide</span>
                                    <span class="white-text text-small text-uppercase letter-spacing-10 margin-three no-margin-bottom display-block">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('http://placehold.it/1920x1100');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle slider-text-middle6 padding-left-right-px wow fadeInUp">
                                    <span class="slider-title-big6 white-text text-uppercase font-weight-700 letter-spacing-3">Third Slide</span>
                                    <span class="white-text text-small text-uppercase letter-spacing-10 margin-three no-margin-bottom display-block">Lorem ipsum dolor sit amet consectetur adipisicing.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
        </section>
        <!-- end slider -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">
                        <i class="icon-heart medium-icon"></i>
                        <span id="anim-number-pizza" class="counter-number"></span>
                        <span class="timer counter-number alt-font" data-to="312" data-speed="7000"></span>
                        <span class="counter-title">Pizzas Ordered</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">
                        <i class="icon-happy medium-icon"></i>
                         <span class="timer counter-number alt-font" data-to="980" data-speed="7000"></span>
                        <span class="counter-title">Happy Clients</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">
                        <i class="icon-anchor medium-icon"></i>
                         <span class="timer counter-number alt-font" data-to="810" data-speed="7000"></span>
                        <span class="counter-title">Projects Completed</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp" data-wow-duration="1200ms">
                        <i class="icon-chat medium-icon"></i>
                         <span class="timer counter-number alt-font" data-to="600" data-speed="7000"></span>
                        <span class="counter-title">Comments Reserved</span>
                    </div>
                    <!-- end counter -->
                </div>
            </div>
        </section>

        <!-- about section -->
        <section class="no-padding-bottom wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-10 text-center center-col">
                        <span class="margin-five no-margin-top display-block letter-spacing-2">EST. 2011</span>
                        <h1>A digital studio crafting beautiful experiences.</h1>
                        <p class="text-med width-90 center-col margin-seven no-margin-bottom"> We've been crafting beautiful websites, launching stunning brands and making clients happy for years. With our prestigious craftsmanship, remarkable client care and passion for design.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid margin-five no-margin-bottom">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 bg-fast-yellow padding-three text-center">
                        <span class="text-small text-uppercase font-weight-600 black-text letter-spacing-2">Web Design &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Graphics &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Magento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WordPress &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Applications</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->
        <!-- features section -->
        <section id="features" class="features wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Why Choose Us?</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <!-- features item -->
                        <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                            <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="icon-desktop medium-icon"></i></div>
                            <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                <h5>Elegant / Unique design</h5>
                                <div class="separator-line bg-yellow"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>
                        <!-- end features item -->
                        <!-- features item -->
                        <div class="features-section no-margin col-md-12 col-sm-6 no-padding wow fadeInUp">
                            <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="icon-target medium-icon"></i></div>
                            <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                <h5>True Responsiveness</h5>
                                <div class="separator-line bg-yellow"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>
                        <!-- end features item -->
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <!-- features item -->
                        <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                            <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="icon-trophy medium-icon"></i></div>
                            <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                <h5>Parallax Slider</h5>
                                <div class="separator-line bg-yellow"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>
                        <!-- end features item -->
                        <!-- features item -->
                        <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                            <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="icon-scissors medium-icon"></i></div>
                            <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                <h5>Lightbox photo Gallery</h5>
                                <div class="separator-line bg-yellow"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>
                        <!-- end features item -->
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <!-- features item -->
                        <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                            <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="icon-hotairballoon medium-icon"></i></div>
                            <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                <h5>Different Layout Type</h5>
                                <div class="separator-line bg-yellow"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>
                        <!-- end features item -->
                        <!-- features item -->
                        <div class="features-section col-md-12 col-sm-6 no-padding wow fadeInUp">
                            <div class="col-md-3 col-sm-2 col-xs-2 no-padding"><i class="icon-tools medium-icon"></i></div>
                            <div class="col-md-9 col-sm-9 col-xs-9 no-padding text-left f-right">
                                <h5>Skills and Accordians</h5>
                                <div class="separator-line bg-yellow"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            </div>
                        </div>
                        <!-- end features item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end features section -->
        <!-- counter section -->
        <section id="counter" class="fix-background" style="background-image:url('http://placehold.it/1920x1100');">
            <div class="opacity-full bg-dark-gray"></div>
            <div class="container position-relative">
                <div class="row">
                    <!-- counter item -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">
                        <i class="icon-heart medium-icon"></i>
                        <span class="timer counter-number white-text main-font font-weight-600" data-to="516" data-speed="7000"></span>
                        <span class="counter-title light-gray-text">Pizzas Ordered</span>
                    </div>
                    <!-- end counter item -->
                    <!-- counter item -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">
                        <i class="icon-happy medium-icon"></i>
                        <span class="timer counter-number white-text main-font font-weight-600" data-to="478" data-speed="7000"></span>
                        <span class="counter-title light-gray-text">Happy Clients</span>
                    </div>
                    <!-- end counter item -->
                    <!-- counter item -->
                    <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">
                        <i class="icon-anchor medium-icon"></i>
                        <span class="timer counter-number white-text main-font font-weight-600" data-to="652" data-speed="7000"></span>
                        <span class="counter-title light-gray-text">Projects Completed</span>
                    </div>
                    <!-- end counter item -->
                    <!-- counter item -->
                    <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp" data-wow-duration="1200ms">
                        <i class="icon-chat medium-icon"></i>
                        <span class="timer counter-number white-text main-font font-weight-600" data-to="458" data-speed="7000"></span>
                        <span class="counter-title light-gray-text">Comments Reserved</span>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </section>
        <!-- end counter section -->
        <!-- portfolio section -->
        <section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top no-padding-bottom wow fadeIn">
            <div class="container-fluid">
                <div class="row no-padding">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom">Latest Work</h3>
                    </div>
                    <!-- end section title -->
                    <div class="col-md-3 col-sm-10 margin-three center-col text-center">
                        <h4 class="gray-text">We are technology leaders and have crafted intuitive and lasting online and mobile experiences for hundreds of associations and non-profits.</h4>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="text-center">
                            <!-- filter navigation -->
                            <ul class="portfolio-filter nav nav-tabs">
                                <li class="nav active"><a href="#" data-filter="*">All</a></li>
                                <li class="nav"><a href="#" data-filter=".magento">Magento</a></li>
                                <li class="nav"><a href="#" data-filter=".jquery">Jquery</a></li>
                                <li class="nav"><a href="#" data-filter=".wordpress">Wordpress</a></li>
                                <li class="nav"><a href="#" data-filter=".html">HTML</a></li>
                            </ul>
                            <!-- end filter navigation -->
                        </div>
                    </div>
                    <div class="grid-gallery overflow-hidden">
                        <div class="tab-content">
                            <ul class="masonry-items grid">
                                <!-- portfolio item -->
                                <li class="html jquery wordpress">
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page1.html"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page1.html">Herbal Beauty Salon</a></h3>
                                            <p>Branding &amp; Identity</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end portfolio item -->
                                <!-- portfolio item -->
                                <li class="html magento wordpress">
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page2.html"><img src="http://placehold.it/800x1200" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page2.html">Tailoring Interior </a></h3>
                                            <p>Branding &amp; Identity</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end portfolio item -->
                                <!-- portfolio item -->
                                <li class="jquery magento wordpress">
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page3.html"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page3.html">Pixflow Studio</a></h3>
                                            <p>Web &amp; Branding</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end portfolio item -->
                                <!-- portfolio item -->
                                <li class="wordpress magento jquery">
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page4.html"><img src="http://placehold.it/800x1200" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page4.html">Kaya Skin Care</a></h3>
                                            <p>UI Design &amp; Identity</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end portfolio item -->
                                <!-- portfolio item -->
                                <li class="html jquery">
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page5.html"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page5.html">Third Eye Glasses</a></h3>
                                            <p>Logo &amp; Brochure</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end portfolio item -->
                                <!-- portfolio item -->
                                <li class="html magento">
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page1.html"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="standard-with-slider.html">Rubber Studio</a></h3>
                                            <p>Branding &amp; Identity</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
        <!-- work process section -->
        <section id="work-process" class="work-process wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden sm-margin-bottom-eight wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">01</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">Strategy</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-chat medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">Lorem Ipsum is simply dummy text<br> of the printing and typesetting.</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden sm-margin-bottom-eight wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">02</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">Planning</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-toolbox medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">Lorem Ipsum is simply dummy text<br> of the printing and typesetting.</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">03</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">Development</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-desktop medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">Lorem Ipsum is simply dummy text<br> of the printing and typesetting.</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">04</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">Launch</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-hotairballoon medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">Lorem Ipsum is simply dummy text<br> of the printing and typesetting.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end work process section -->
        <!-- highlight section -->
        <section class="bg-fast-yellow no-padding wow fadeInUp">
            <div class="container">
                <div class="row padding-five sm-text-center">
                    <div class="col-md-1">
                        <i class="medium-icon black-text no-margin icon-toolbox"></i>
                    </div>
                    <div class="col-md-6 no-padding">
                        <span class="text-med text-uppercase letter-spacing-2 margin-two black-text font-weight-600 xs-margin-top-six xs-margin-bottom-six display-block">Want to see more amazing works?</span>
                    </div>
                    <div class="col-md-5 no-padding">
                        <a class="highlight-button-dark btn btn-medium button xs-margin-bottom-five xs-no-margin-right" href="portfolio-wide-with-title-gutter-4columns.html">View Portfolio</a>
                        <a class="highlight-button btn btn-medium button xs-margin-bottom-five xs-no-margin-right" href="#">Subscribe Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end highlight section -->
        <!-- services section -->
        <section class="corporate-standards no-padding-bottom wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom">Our Services</h3>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
            <div class="container-fluid margin-five no-margin-bottom no-padding">
                <div class="row no-margin">
                    <!-- tab -->
                    <div class="col-md-12 col-sm-12 center-col text-center no-padding" id="animated-tab">
                        <!-- tab navigation -->
                        <ul class="nav nav-tabs margin-five no-margin-top xs-margin-bottom-seven">
                            <li class="nav active"><a href="#tab6_sec1" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-picture"></i></span></a><br><span class="text-small text-uppercase letter-spacing-3 margin-five font-weight-600 xs-letter-spacing-none xs-display-none">Branding</span></li>
                            <li class="nav"><a href="#tab6_sec2" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-tools"></i></span></a><br><span class="text-small text-uppercase letter-spacing-3 margin-five font-weight-600 xs-letter-spacing-none xs-display-none">Design</span></li>
                            <li class="nav"><a href="#tab6_sec3" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-mobile"></i></span></a><br><span class="text-small text-uppercase letter-spacing-3 margin-five font-weight-600 xs-letter-spacing-none xs-display-none">Development</span></li>
                            <li class="nav"><a href="#tab6_sec4" data-toggle="tab" class="xs-min-height-inherit xs-no-padding"><span><i class="icon-camera"></i></span></a><br><span class="text-small text-uppercase letter-spacing-3 margin-five font-weight-600 xs-letter-spacing-none xs-display-none">Photography</span></li>
                        </ul>
                        <!-- end tab navigation -->
                        <!-- tab content section -->
                        <div class="tab-content">
                            <!-- tab content -->
                            <div id="tab6_sec1" class="text-center center-col tab-pane fade in active"> 
                                <div class="tab-pane fade in"> 
                                    <div class="col-lg-6 col-md-6 no-padding corporate-standards-img cover-background position-relative" style="background-image:url('http://placehold.it/1200x756');">
                                        <div class="opacity-medium bg-dark-gray"></div>
                                        <p class="title-small text-uppercase corporate-standards-title white-text letter-spacing-7"><span class="title-extra-large no-letter-spacing yellow-text">01</span><br>Branding</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 corporate-standards-text sm-margin-lr-four sm-margin-top-four xs-padding-tb-ten">
                                        <div class="img-border-small-fix border-gray"></div>
                                        <i class="icon-picture large-icon yellow-text"></i>
                                        <h1 class="margin-ten no-margin-bottom">Intelligence is nothing without ambition.</h1>
                                        <p class="text-med margin-ten width-80 center-col xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a class="text-small highlight-link text-uppercase bg-black white-text" href="services.html">Read More <i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- tab content -->
                            <div id="tab6_sec2" class="text-center center-col tab-pane fade in"> 
                                <div class="tab-pane fade in"> 
                                    <div class="col-lg-6 col-md-6 no-padding corporate-standards-img cover-background position-relative" style="background-image:url('http://placehold.it/1200x756');">
                                        <div class="opacity-medium bg-dark-gray"></div>
                                        <p class="title-small text-uppercase corporate-standards-title white-text letter-spacing-7"><span class="title-extra-large no-letter-spacing yellow-text">02</span><br>Design</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 corporate-standards-text sm-margin-lr-four sm-margin-top-four xs-padding-tb-ten">
                                        <div class="img-border-small-fix border-gray"></div>
                                        <i class="icon-tools large-icon yellow-text"></i>
                                        <h1 class="margin-ten no-margin-bottom">We specialise in creating success brands.</h1>
                                        <p class="text-med margin-ten width-80 center-col">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a class="text-small highlight-link text-uppercase bg-black white-text" href="services.html">Read More <i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- tab content -->
                            <div id="tab6_sec3" class="text-center center-col tab-pane fade in"> 
                                <div class="tab-pane fade in"> 
                                    <div class="col-lg-6 col-md-6 no-padding corporate-standards-img cover-background position-relative" style="background-image:url('http://placehold.it/1200x756');">
                                        <div class="opacity-medium bg-dark-gray"></div>
                                        <p class="title-small text-uppercase corporate-standards-title white-text letter-spacing-7"><span class="title-extra-large no-letter-spacing yellow-text">03</span><br>Development</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 corporate-standards-text sm-margin-lr-four sm-margin-top-four xs-padding-tb-ten">
                                        <div class="img-border-small-fix border-gray"></div>
                                        <i class="icon-mobile large-icon yellow-text"></i>
                                        <h1 class="margin-ten no-margin-bottom">Intelligence is nothing without ambition.</h1>
                                        <p class="text-med margin-ten width-80 center-col">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a class="text-small highlight-link text-uppercase bg-black white-text" href="services.html">Read More <i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- tab content -->
                            <div id="tab6_sec4" class="text-center center-col tab-pane fade in"> 
                                <div class="tab-pane fade in"> 
                                    <div class="col-lg-6 col-md-6 no-padding corporate-standards-img cover-background position-relative" style="background-image:url('http://placehold.it/1200x756');">
                                        <div class="opacity-medium bg-dark-gray"></div>
                                        <p class="title-small text-uppercase corporate-standards-title white-text letter-spacing-7"><span class="title-extra-large no-letter-spacing yellow-text">04</span><br>Photography</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 corporate-standards-text sm-margin-lr-four sm-margin-top-four xs-padding-tb-ten">
                                        <div class="img-border-small-fix border-gray"></div>
                                        <i class="icon-camera large-icon yellow-text"></i>
                                        <h1 class="margin-ten no-margin-bottom">We specialise in creating success brands.</h1>
                                        <p class="text-med margin-ten width-80 center-col">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <a class="text-small highlight-link text-uppercase bg-black white-text" href="services.html">Read More <i class="fa fa-long-arrow-right extra-small-icon white-text"></i></a>
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
        </section>
        <!-- end services section -->
        <!-- key person section -->
        <section id="key-person" class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom">Key Person</h3>
                    </div>
                    <!-- end section title -->
                    <div class="col-md-5 col-sm-10 center-col text-center margin-six wow fadeIn">
                        <h4 class="gray-text">We are a multi-discipline design studio with an extensive network of the finest talent, allowing us to build the perfect team to respond to your brief. </h4>
                    </div>
                </div>
                <div class="row margin-six">
                    <!-- key person item -->
                    <div class="col-md-4 col-xs-4 bottom-margin text-center wow fadeInUp" data-wow-duration="300ms">
                        <div class="key-person">
                            <div class="key-person-img"><img src="http://placehold.it/500x730" alt=""></div>
                            <div class="key-person-details">
                                <span class="person-name black-text">Sommer Christian</span> <span class="person-post">Founder and CEO</span>
                                <div class="separator-line bg-yellow"></div>
                                <div class="person-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end key person item -->
                    <!-- key person item -->
                    <div class="col-md-4 col-xs-4 bottom-margin text-center wow fadeInUp" data-wow-duration="600ms">
                        <div class="key-person">
                            <div class="key-person-img"><img src="http://placehold.it/500x730" alt=""></div>
                            <div class="key-person-details">
                                <span class="person-name black-text">Sara Smith</span> <span class="person-post">Creative Studio Head</span>
                                <div class="separator-line bg-yellow"></div>
                                <div class="person-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end key person item -->
                    <!-- key person item -->
                    <div class="col-md-4 col-xs-4 text-center wow fadeInUp" data-wow-duration="900ms">
                        <div class="key-person">
                            <div class="key-person-img"><img src="http://placehold.it/500x730" alt=""></div>
                            <div class="key-person-details">
                                <span class="person-name black-text">Jane Lupkin</span> <span class="person-post">Magento Developer</span>
                                <div class="separator-line bg-yellow"></div>
                                <div class="person-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end key person item -->
                </div>
            </div>
        </section>
        <!-- end key person section -->
        <!-- case study section -->
        <section class="no-padding case-study bg-gray wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div id="owl-demo-small" class="owl-carousel owl-theme dark-pagination  dark-pagination-without-next-prev-arrow">
                        <!-- case study item -->
                        <div class="item">
                            <div class="col-lg-6 col-md-6 case-study-img cover-background" style="background-image:url('http://placehold.it/1000x600');"></div>
                            <div class="col-lg-6 col-md-6 case-study-details">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <span class="about-number black-text font-weight-400 letter-spacing-2 xs-no-border xs-no-padding-left xs-display-none">01</span>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 about-text position-relative xs-text-center">
                                    <p class="title-small text-uppercase letter-spacing-3 black-text font-weight-600 no-margin-bottom">Corinne Product</p>
                                    <span class="case-study-work letter-spacing-3">Brand Strategy  |  Graphic Design</span>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry.</p>
                                    <a href="single-project-page1.html" class="highlight-button-black-border btn btn-small no-margin-bottom sm-no-margin">View Case Study</a>
                                </div>
                            </div>
                        </div>
                        <!-- end case study item -->
                        <!-- case study item -->
                        <div class="item">
                            <div class="col-lg-6 col-md-6 case-study-img cover-background" style="background-image:url('http://placehold.it/1000x600');"></div>
                            <div class="col-lg-6 col-md-6 case-study-details">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <span class="about-number black-text font-weight-400 letter-spacing-2 xs-no-border xs-no-padding-left xs-display-none">02</span>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 about-text position-relative xs-text-center">
                                    <p class="title-small text-uppercase letter-spacing-3 black-text font-weight-600 no-margin-bottom">Rebrand Coffee</p>
                                    <span class="case-study-work letter-spacing-3">Web Design  |  Brand Strategy</span>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry.</p>
                                    <a href="single-project-page1.html" class="highlight-button-black-border btn btn-small no-margin-bottom sm-no-margin">View Case Study</a>
                                </div>
                            </div>
                        </div>
                        <!-- end case study item -->
                        <!-- case study item -->
                        <div class="item">
                            <div class="col-lg-6 col-md-6 case-study-img cover-background" style="background-image:url('http://placehold.it/1000x600');"></div>
                            <div class="col-lg-6 col-md-6 case-study-details">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <span class="about-number black-text font-weight-400 letter-spacing-2 xs-no-border xs-no-padding-left xs-display-none">03</span>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 about-text position-relative xs-text-center">
                                    <p class="title-small text-uppercase letter-spacing-3 black-text font-weight-600 no-margin-bottom">William Stormdal</p>
                                    <span class="case-study-work letter-spacing-3">Brand Strategy  |  Graphic Design</span>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry. Lorem Ipsum has been the industry's standard dummy. Lorem Ipsum is simply dummy text of the printing &amp; typesetting industry.</p>
                                    <a href="single-project-page1.html" class="highlight-button-black-border btn btn-small no-margin-bottom sm-no-margin">View Case Study</a>
                                </div>
                            </div>
                        </div>
                        <!-- end case study item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- case study section -->
        <!-- testimonial section -->
        <section class="border-bottom">
            <div class="container">
                <div class="row">
                    <!-- testimonials item -->
                    <div class="col-md-4 col-sm-4 testimonial-style2 text-center wow zoomInUp xs-margin-bottom-ten">
                        <img src="http://placehold.it/300x300" alt=""/>
                        <p class="center-col width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <span class="name black-text">Alexander Smith - Google</span>
                        <i class="fa fa-quote-left small-icon yellow-text display-block margin-five no-margin-bottom"></i>
                    </div>
                    <!-- end testimonials item -->
                    <!-- testimonials item -->
                    <div class="col-md-4 col-sm-4 testimonial-style2 text-center wow zoomInUp xs-margin-bottom-ten">
                        <img src="http://placehold.it/300x300" alt=""/>
                        <p class="center-col width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <span class="name black-text">Herman Miller - Apple</span>
                        <i class="fa fa-quote-left small-icon yellow-text display-block margin-five no-margin-bottom"></i>
                    </div>
                    <!-- end testimonials item -->
                    <!-- testimonials item -->
                    <div class="col-md-4 col-sm-4 testimonial-style2 text-center wow zoomInUp no-margin-top">
                        <img src="http://placehold.it/300x300" alt=""/>
                        <p class="center-col width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        <span class="name black-text">Bryan Jonhson - Yahoo</span>
                        <i class="fa fa-quote-left small-icon yellow-text display-block margin-five no-margin-bottom"></i>
                    </div>
                    <!-- end testimonials item -->
                </div>
            </div>
        </section>
        <!-- end testimonial section -->
        <!-- blog section -->
        <section id="blog" class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Latest Blogs</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <!-- blog item -->
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="300ms">
                        <div class="blog-post">
                            <div class="blog-post-images"><a href="blog-single-full-width-with-image-slider.html"><img src="http://placehold.it/800x500" alt=""></a></div>
                            <div class="post-details">
                                <a href="blog-single-full-width-with-image-slider.html" class="post-title">Standard post with picture</a>
                                <span class="post-author sm-margin-bottom-three sm-margin-top-three">Posted by <a href="blog-single-full-width-with-image-slider.html">Michael Freemon</a> | 10 January 2015</span>
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog item -->
                    <!-- blog item -->
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="600ms">
                        <div class="blog-post">
                            <div class="blog-post-images"><a href="blog-single-right-sidebar.html"><img src="http://placehold.it/800x500" alt=""></a></div>
                            <div class="post-details">
                                <a href="blog-single-right-sidebar.html" class="post-title">Post with featured picture</a>
                                <span class="post-author sm-margin-bottom-three sm-margin-top-three">Posted by <a href="blog-single-right-sidebar.html">Colin Powell</a> | 02 January 2015</span>
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog item -->
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="900ms">
                        <div class="blog-post">
                            <div class="blog-post-images"><a href="blog-single-full-width.html"><img src="http://placehold.it/800x500" alt=""></a></div>
                            <div class="post-details">
                                <a href="blog-single-full-width.html" class="post-title">Standard post with slider</a>
                                <span class="post-author sm-margin-bottom-three sm-margin-top-three">Posted by <a href="blog-single-full-width.html">Vince Lombardi</a> | 02 January 2015</span>
                                <p class="width-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end blog item -->
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp" data-wow-duration="1200ms">
                        <a class="btn btn-black btn-small margin-four no-margin-bottom" href="blog-grid-3columns.html">View All Blog</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog section -->
        <!-- approach section -->
        <section id="approach" class="approach bg-black wow fadeIn">
            <div class="container">
                <div class="row">
                    <div id="approach-slider" class="owl-carousel owl-theme light-pagination bottom-pagination">
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four wow fadeIn sm-margin-bottom-ten" data-wow-duration="300ms"> <i class="icon-camera medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Considered Design</h5><span class="approach-details">We respond directly to a<br>project's objectives.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four wow fadeIn sm-margin-bottom-ten" data-wow-duration="600ms"> <i class="icon-target medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Creative Collaboration</h5><span class="approach-details">We love working with people<br>who embrace the design.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four wow fadeIn xs-margin-bottom-ten" data-wow-duration="900ms"> <i class="icon-megaphone medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Impeccable Service</h5><span class="approach-details">Great service is achieved<br>through professionalism.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four wow fadeIn" data-wow-duration="1200ms"> <i class="icon-envelope medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Enhance Amplify</h5><span class="approach-details">Working with the latest<br> technology we design.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four sm-margin-bottom-ten"><i class="icon-laptop medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Considered Design</h5><span class="approach-details">We respond directly to a<br>project's objectives.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four sm-margin-bottom-ten"><i class="icon-tools medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Creative Collaboration</h5><span class="approach-details">We love working with people<br>who embrace the design.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four xs-margin-bottom-ten"><i class="icon-hotairballoon medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Impeccable Service</h5><span class="approach-details">Great service is achieved<br>through professionalism.</span></div>
                        </div>
                        <!-- end slider item -->
                        <!-- slider item -->
                        <div class="item margin-ten no-margin-top">
                            <div class="text-center margin-four"> <i class="icon-map medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom xs-margin-top-five">Understand situation</h5><span class="approach-details">Working with the latest<br> technology we design.</span></div>
                        </div>
                        <!-- end slider item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end approach section -->
        <!-- new project section -->
        <section id="new-project" class="new-project wow fadeIn">
            <div class="container">
                <div class="row center-col text-center">
                    <h5 class="wow fadeInDown">We'd love to hear about your project.</h5>
                    <a class="btn highlight-button-black-border margin-four no-margin-bottom wow fadeInUp" href="contact-us.html">Start Now</a>
                </div>
            </div>
        </section>
        <!-- end new project section -->
@endsection