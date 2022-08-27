@extends('layouts.frontend')
@section('content')
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">

                </div>
            </div>
        </div>
    </div>
</div>



<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-11">


                <div class="job_lists m-0">

                    <div class="row">

                        @foreach($sql1 as $item)
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="jobs_conetent">
                                            <a href="{{url('job/details')}}/{{$item->id}}"><h4>{{$item->title}}</h4></a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> {{$item->location}}</p>
                                                </div>
                                                <div class="location">
                                                    <p> <i class="fa fa-user-o"></i> {{$item->company}}</p>
                                                </div>
                                                <div class="location">

                                                    <p> <i class="fa fa-clock-o"></i> {{$item->employment}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                            <a href="{{url('job/details')}}/{{$item->id}}" id="{{$item->id}}" class="btn btn-info">View & Apply Now !</a>
                                        </div>
                                        <div class="date">
                                            <p>Deadline: {{$item->deadline}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                    </div>
                    <div class='demo-section clearfix'>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination_wrap">
                                <ul>
                                    <li><a href='{{url('jobs/1')}}'> <i class='ti-angle-left'></i> </a></li>
                                @for ($i = 1; $i <= $str_pag; $i++)
                                        <li><a href="{{ url('/jobs')}}/{{$i}}"><span>0{{$i}}</span></a></li>
                                @endfor
                                    <li><a href="{{ url('/jobs')}}/{{$str_pag}}"> <i class='ti-angle-right'></i> </a></li>


                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->
<div class="top_companies_area">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-lg-6 col-md-6">
                <div class="section_title">
                    <h4>Companies we hire for</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xl-3 col-md-3">
                <div class="single_company" style="text-align: center; background: #F5F7FA">
                    <div class="thumb " style="width: 170px; height: 112px; margin: auto; border:0px solid #F0F0F0">
                        <img src="{{url('frontend/img/partner/finswiss.svg')}}" alt="finswiss">
                    </div>
                    <a href="#"><h3>FinSwiss</h3></a>

                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3">
                <div class="single_company" style="text-align: center; background: #F5F7FA">
                    <div class="thumb " style="width: 170px; height: 112px; margin: auto; border:0px solid #F0F0F0">
                        <img src="{{url('frontend/img/partner/eurekly.svg')}}" alt="eurekly">
                    </div>
                    <a href="#"><h3>Eurekly</h3></a>

                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3">
                <div class="single_company" style="text-align: center; background: #F5F7FA">
                    <div class="thumb " style="width: 170px; height: 112px; margin: auto; border: 0px solid #F0F0F0">
                        <img src="{{url('frontend/img/partner/bringiton.svg')}}" alt="bringiton">
                    </div>
                    <a href="#"><h3>BringItOn</h3></a>

                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3">
                <div class="single_company" style="text-align: center; background: #F5F7FA">
                    <div class="thumb "  style="width: 170px; height: 112px; margin: auto; border: 0px solid #F0F0F0">
                        <img src="{{url('frontend/img/partner/ecodigital.svg')}}"alt="ecodigital">
                    </div>
                    <a href="#"><h3>Ecodigital</h3></a>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
