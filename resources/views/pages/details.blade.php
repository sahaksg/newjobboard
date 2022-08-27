@extends('layouts.frontend')
@section('content')




    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif

                        <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/svg_icon/1.svg')}}" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="#"><h4>

                                        </h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">

                                        </div>
                                        <div class="location">
                                            <h1>{{$result->title}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">

                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Job description</h4>
                            <p>{{$result->information}} </p>

                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <p>{{$result->responce}} </p>

                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <p> {{$result->qualif}}</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p> {{$result->benef}}</p>
                        </div>
                    </div>


                    <div class="apply_job_form white-bg">
                        <h4>Apply for the job</h4>


                        <form action="{{url('applicant')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name" name="name" required>
                                        <input type="text" value='{{$result->id}}'  name="job_id" hidden>
                                        <input type="text" value='{{$result->title}}'  name="job_title" hidden>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email" name="email" required>


                                    </div>
                                </div>

                                <div class="col-md-12">



                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Attach Your CV</label>
                                        <input class="form-control" type="file" id="formFile" name="file" accept=".doc, .docx, .pdf, .rtf">
                                    </div>






                                </div>
                                <div class="col-md-12">
                                    <div class="input_field">
                                        <textarea  id="" cols="30" rows="10" placeholder="Type your message here..." name="description" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn3 w-100" type="submit" name="apply">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Job Summary</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li>Published on: <span>{{$result->created_at}}</span></li>
                                <li>Salary: <span>{{$result->salary}}</span></li>
                                <li>Location: <span>{{$result->location}}</span></li>
                                <li>Job Nature: <span>{{$result->employment}} </span></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection



