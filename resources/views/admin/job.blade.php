@extends('layouts.master')
@section('title','Jobboard Admin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Employment type</th>
                                    <th>Location</th>
                                    <th>Dead line</th>
                                    <th>Salary</th>

                                </tr>
                                </thead>
                                <tbody>

@foreach($jobs as $job)
                 <tr>
                    <td>{{$job->title}}</td>
                    <td>{{$job->employment}}</td>
                    <td>{{$job->location}}</td>
                    <td>{{$job->deadline}}</td>
                    <td>{{$job->salary}}</td>
                  </tr>
@endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Employment type</th>
                                    <th>Location</th>
                                    <th>Dead line</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>




                </div>

            </div>

        </div>

    </section>

@endsection
