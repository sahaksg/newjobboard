@extends('layouts.frontend')
@section('content')



    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>contact us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section section_padding">
        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="d-none d-sm-block mb-5 pb-4">


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title"></h2>
                    </div>
                    <div class="col-lg-8">
                        <form method="POST" action="{{ route('contact.store') }}" class="form-contact contact_form"
                              novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                                    <!-- Error -->
                                    @if ($errors->has('name'))
                                        <div class="error">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                                    @if ($errors->has('email'))
                                        <div class="error">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                                    @if ($errors->has('phone'))
                                        <div class="error">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                           id="subject">
                                    @if ($errors->has('subject'))
                                        <div class="error">
                                            {{ $errors->first('subject') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                              rows="4"></textarea>
                                    @if ($errors->has('message'))
                                        <div class="error">
                                            {{ $errors->first('message') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="send" value="Submit" class="btn btn-success btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
