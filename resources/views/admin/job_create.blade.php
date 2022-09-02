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
        <form action="{{url('admin/jobs/store')}}" method="POST" >
            @csrf

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
                                <input type="text" id="inputName" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Job Information</label>
                                <textarea id="inputDescription" class="form-control" rows="4" name="information"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Employment</label>
                                <select id="inputStatus" class="form-control custom-select" name="employment">
                                    <option selected disabled>Select one</option>
                                    <option value="part-time">Part-Time</option>
                                    <option value="full-time">Full-Time</option>
                                    <option value="full-time or part-time">Full-Time Or  Part-Time</option>
                                </select>
                                <div class="form-group">
                                    <label for="inputDescription">Responsibility</label>
                                    <textarea id="inputDescription" class="form-control" rows="4" name="responce"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Qualification</label>
                                    <textarea id="inputDescription" class="form-control" rows="4" name="qualif"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Benefisity</label>
                                    <textarea id="inputDescription" class="form-control" rows="4" name="benef"></textarea>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
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
                                <div class="d-flex">
                                <input class="form-control" style="width: 10rem" type="text" id="inputEstimatedBudget"  name="salary">
                                <select name="currency" >
                                    <option value="na">N/A</option>
                                    <option value="eur">&#8364</option>
                                    <option value="usd">&#x24</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">Location</label>
                                <input type="text" class="form-control" name="location">
                            </div>
                            <div class="form-group">
                                <label for="inputSpentBudget">Company</label>
                                <input type="text"  class="form-control" name="company">
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedDuration">Deadline</label>
                                <input type="date" id="inputEstimatedDuration" class="form-control" name="deadline">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select name="status" >
                                    <option value="active">Active</option>
                                    <option value="expired">Expired</option>
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
                    <a href="{{url('admin/jobs/create')}}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Job" class="btn btn-success float-right" name="submit">
                </div>
            </div>
        </form>
    </section>


@endsection
