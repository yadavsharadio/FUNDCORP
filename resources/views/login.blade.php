@extends('main/master')
@push('title')
    <title>Login</title>
@endpush 
@section('content')
 <!-- head section -->
 <section class="content-top-margin page-title page-title-small border-bottom-light border-top-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-lg-12 wow fadeInUp textAlignCenter" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="black-text">Login</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->

        <!-- content section -->
        <section class="bg-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-11 center-col xs-no-padding">
                        <form>
                            <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="username" class="text-uppercase">Username</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input type="text" name="username" id="username" class="input-round big-input">
                                <!-- end input  -->
                            </div>
                            <div class="form-group no-margin-bottom">
                                <!-- label  -->
                                <label for="password" class="text-uppercase">Password</label>
                                <!-- end label  -->
                                <!-- input  -->
                                <input type="password" name="password" id="password" class="input-round big-input">
                                <!-- end input  -->
                            </div>
                            <button class="btn highlight-button-dark btn-small btn-round margin-five no-margin-right" type="submit">Login</button>
                            <a href="#" class="display-block text-uppercase">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end content section -->
@endsection