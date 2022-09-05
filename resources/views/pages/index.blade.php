@extends('layouts.frontend')
@section('content')



    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 700px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">

                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream Job</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">You can apply online and we will contact you soon.</p>

                            <!-- <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <a href="#" class="boxed-btn3">Upload your Resume</a>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="frontend/img/banner/illustration.png" alt="">
        </div>
    </div>



    <div class="job_listing_area pt-3" style="padding-bottom: 0px">
        <div class="container">

            <div class="row align-items-center">

                <h4 class="text-justify h5" style="text-indent: 20px; font-family: 'myFont'; padding:4% ">{!! $result[0]->text !!}</h4>
            </div>

            <div class="job_lists">
                <div class="row">






                </div>
            </div>
        </div>
    </div>




@endsection
