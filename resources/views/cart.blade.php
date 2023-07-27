@extends('main/master')
@push('title')
    <title>cart</title>
@endpush()
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
                                    <td class="product-remove text-center">
                                        <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </td>
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
                                    <td class="product-remove text-center">
                                        <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 cupon padding-five border-top border-bottom">
                        <button class="highlight-button btn btn-very-small no-margin pull-left">Empty Cart</button>
                        <button class="highlight-button btn btn-very-small no-margin pull-right continue-shopping">Continue Shopping</button>
                        <button class="highlight-button btn btn-very-small no-margin pull-right">Update Shopping Cart</button>
                    </div>
                    <div class="col-sm-12 padding-five no-padding-bottom">
                        <div class="col-md-5 col-sm-5 calculate no-padding-left xs-margin-bottom-ten xs-no-padding">
                            <div class="panel panel-default border margin-five no-margin-top">
                                <div class="panel-heading no-padding" id="headingOne" role="tablist">
                                    <a href="#collapse-two-link1" data-parent="#collapse-two" data-toggle="collapse" class="collapsed">
                                        <h4 class="panel-title no-border black-text font-weight-600 letter-spacing-2">Coupon Code <span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                    </a>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-two-link1" style="height: 0px;">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="form-wrap">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Your Coupon code">
                                                    <button class="highlight-button btn btn-very-small no-margin pull-left">Apply Code</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default border">
                                <div class="panel-heading no-padding" id="headingTwo" role="tablist">
                                    <a href="#collapse-two-link2" data-parent="#collapse-two" data-toggle="collapse" class="collapsed">
                                        <h4 class="panel-title no-border black-text font-weight-600 letter-spacing-2">Calculate Shipping <span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                    </a>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-two-link2" style="height: 0px;">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="form-wrap">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Country">
                                                    <input type="text" placeholder="State / County">
                                                    <input type="text" placeholder="Postcode">
                                                    <button class="highlight-button btn btn-very-small no-margin pull-left">Update Totals</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-7 col-md-offset-1 no-padding-right xs-no-padding">
                            <table class="table cart-total">
                                <tbody>
                                    <tr>
                                        <th class="padding-two text-right no-padding-right text-uppercase font-weight-600 letter-spacing-2 text-small xs-no-padding">Cart Subtotal</th>
                                        <td class="padding-two text-uppercase text-right no-padding-right font-weight-600 black-text xs-no-padding">$800</td>
                                    </tr>
                                    <tr>
                                        <th class="padding-two text-right no-padding-right text-uppercase font-weight-600 letter-spacing-2 text-small xs-no-padding">Shipping and Handling</th>
                                        <td class="padding-two text-uppercase text-right no-padding-right font-weight-600 black-text text-small xs-no-padding">Free</td>
                                    </tr>
                                    <tr>
                                        <td class="padding-one no-padding-right xs-no-padding" colspan="2">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <th class="padding-two text-uppercase text-right no-padding-right font-weight-600 text-large xs-no-padding">Order Total</th>
                                        <td class="padding-two text-uppercase text-right no-padding-right font-weight-600 black-text text-large no-letter-spacing xs-no-padding">$800</td>
                                    </tr>
                                    <tr>
                                        <td class="padding-one no-padding-right xs-no-padding" colspan="2">
                                            <hr class="no-margin-bottom">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="highlight-button-black-background btn no-margin pull-right checkout-btn" href="shop-checkout.html">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end content section -->
@endsection