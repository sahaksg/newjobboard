@extends('layouts.master')
@section('title','Jobboard Admin')
@section('content')
    <section class="content">
        @if(session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--        {{dd($job)}}--}}
        {{--            {{dd($job->currency)}}--}}
        <form action="{{url('admin/jobs/update/'.$job->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Job Title</label>
                                <input type="text" id="inputName" class="form-control" name="title"
                                       value="{{$job->title}}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Job Information</label>
                                <textarea id="inputDescription" class="form-control" rows="4"
                                          name="information">{{$job->information}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Employment</label>
                                <select id="inputStatus" class="form-control custom-select" name="employment">
                                    <option selected disabled>Select one</option>

                                    <option value="part-time" {{($job->employment)=='part-time'?'selected': ''}}>Part-Time</option>
                                    <option value="full-time" {{($job->employment)=='full-time'?'selected': ''}}>Full-Time</option>
                                    <option value="full-time or part-time" {{($job->employment)=='full-time or part-time'?'selected': ''}}>Full-Time Or Part-Time</option>
                                </select>
                                <div class="form-group">
                                    <label for="inputDescription">Responsibility</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"
                                              name="responce">{{$job->responce}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Qualification</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"
                                              name="qualif">{{$job->information}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Benefisity</label>
                                    <textarea id="inputDescription" class="form-control" rows="4"
                                              name="benef">{{$job->benef}}</textarea>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Other</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Estimated budget</label>
                                <input type="text" id="inputEstimatedBudget" name="salary" value="{{$job->salary}}">
                                <select name="currency">
                                    <option {{($job->currency)==''?'selected': ''}} value="na">N/A</option>
                                    <option {{($job->currency)=='eur'?'selected': ''}} value="eur">€</option>
                                    <option {{($job->currency)=='usd'?'selected': ''}} value="usd">$</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">Location</label>
                                <input type="text" class="form-control" name="location" value="{{$job->location}}">
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">Company</label>
                                <input type="text" class="form-control" name="company" value="{{$job->company}}">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedDuration">Deadline</label>
                                <input type="date" id="inputEstimatedDuration" class="form-control" name="deadline"
                                       value="{{$job->deadline}}">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select name="status">
                                    <option value="active" {{($job->status)=='active'?'selected': ''}}>Active</option>
                                    <option value="expired" {{($job->status)=='expired'?'selected': ''}}>Expired</option>
                                </select>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{url('admin/jobs')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Update Job" class="btn btn-success float-right" name="submit">
                </div>
            </div>
        </form>
    </section>


@endsection
