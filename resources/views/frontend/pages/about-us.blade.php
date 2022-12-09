@extends('frontend.layouts.master')

@section('title','PM168Amulet || About Us')

@section('main-content')

<!-- Breadcrumbs -->
{{-- <div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Breadcrumbs -->
<section class="shop-services section home">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2 col-md-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <img src="{{URL('images/1.png')}}">
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-2 col-md-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <img src="{{URL('images/2.png')}}">
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-2 col-md-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <img src="{{URL('images/3.png')}}">
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-2 col-md-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <img src="{{URL('images/4.png')}}">
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-2 col-md-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <img src="{{URL('images/5.png')}}">
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- About Us -->
<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">

                <img src="{{URL('images/Rec.png')}}">
                <br>
                <div class="about-content">
                    @php
                    $settings=DB::table('settings')->get();
                    @endphp
                    <br>
                    <h3>Contact Us</h3>
                    <p>Please check your shipping status at link below</p>
					<div class="about-img overlay">
						<h4>Address</h4>
						@php
							$settings=DB::table('settings')->get();
						@endphp
						<p class="text"><span><i class="fa fa-map-marker" aria-hidden="true"></i>@foreach($settings as $data) {{$data->address}} @endforeach</span></p>
						<p class="call"><span><i class="fa fa-phone" aria-hidden="true"></i>@foreach($settings as $data) {{$data->phone}} @endforeach</a></span></p>
						<p class="text"><span><i class="fa fa-envelope" aria-hidden="true"></i>@foreach($settings as $data) {{$data->email}} @endforeach</a></span></p>
					</div>
					<!-- End Single Widget -->
                </div>
            </div>
            <div class="col-lg-6 col-12" >
                <h3>About Us</h3>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur. At quis cras ullamcorper tellus quis sed egestas id. Sem
                    felis non nulla placerat eget felis bibendum phasellus. Pellentesque purus suspendisse proin id.
                    Condimentum quam in dictum blandit etiam commodo laoreet senectus cursus.</p>
					<br>
                <div class="about-img overlay">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.320337283293!2d100.531655!3d13.7595457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29eb51015b0f5%3A0xb7d7bd2a9924dbed!2zNDg5IOC4li4g4Lio4Lij4Li14Lit4Lii4Li44LiY4Lii4LiyIOC5geC4guC4p-C4hyDguJfguLjguYjguIfguJ7guI3guLLguYTguJcg4LmA4LiC4LiV4Lij4Liy4LiK4LmA4LiX4Lin4Li1IOC4geC4o-C4uOC4h-C5gOC4l-C4nuC4oeC4q-C4suC4meC4hOC4oyAxMDQwMA!5e0!3m2!1sth!2sth!4v1670416632965!5m2!1sth!2sth" 
							width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->



@endsection
