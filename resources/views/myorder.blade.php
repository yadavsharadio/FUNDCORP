@extends('main/master')
@push('title')
<title>My Orders</title>
@endpush
@section('content')
<!-- head section -->
<section class="content-top-margin page-title page-title-small bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="black-text">Shopping Cart</h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 breadcrumb text-uppercase wow fadeInUp xs-display-none" data-wow-duration="600ms">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->

        <!-- content section -->
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 shop-cart-table">
                        <table class="table shop-cart text-center">
                            <thead>
                                <tr>
                                    <th class="first"></th>
                                    <th class="text-left text-uppercase font-weight-600 letter-spacing-2 text-small black-text">Product</th>
                                    <th class="text-left text-uppercase font-weight-600 letter-spacing-2 text-small black-text">Price</th>
                                    <th class="text-left text-uppercase font-weight-600 letter-spacing-2 text-small black-text">Quantity</th>
                                    <th class="text-left text-uppercase font-weight-600 letter-spacing-2 text-small black-text">Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="shop-single-product.html"><img src="http://placehold.it/120x120" alt="" ></a>
                                    </td>
                                    <td class="text-left">
                                        <a href="shop-single-product.html">Chasse Wells Italian Genuine Leather Incroyable Tote</a>
                                        <span class="text-uppercase display-block text-small margin-two">SKU: 290397</span>
                                        <a href="shop-single-product.html" class="text-small"><i class="fa fa-edit black-text"></i> Edit</a>
                                    </td>
                                    <td class="text-left">
                                        $450
                                    </td>
                                    <td class="product-quantity">
                                        <div class="select-style med-input shop-shorting shop-shorting-cart no-border-round">
                                            <select>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="product-subtotal text-left">$450</td>
                                    
                                </tr>
                                <tr>
                                    <td class="product-thumbnail text-left">
                                        <a href="shop-single-product.html"><img src="http://placehold.it/120x120" alt="" ></a>
                                    </td>
                                    <td class="text-left">
                                        <a href="shop-single-product.html">Tundra perforated suede boots</a>
                                        <span class="text-uppercase display-block text-small margin-two">SKU: 450365</span>
                                        <a href="shop-single-product.html" class="text-small"><i class="fa fa-edit black-text"></i> Edit</a>
                                    </td>
                                    <td class="text-left">
                                        $350
                                    </td>
                                    <td class="product-quantity">
                                        <div class="select-style med-input shop-shorting shop-shorting-cart no-border-round">
                                            <select>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="product-subtotal text-left">$350</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    
                </div>
            </div>
        </section>
        <!-- end content section -->
@endsection 