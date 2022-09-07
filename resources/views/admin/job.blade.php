@extends('layouts.master')
@section('title','Jobboard Admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('admin/jobs/search')}}" method="post">
                                @csrf
                                <div class="form-inline mb-3">
                                    <div class="input-group">
                                        <input value="" class="form-control" type="search"
                                               placeholder="Search job title" aria-label="Search" name="title">
                                        <div class="input-group-append">
                                            <button class="btn btn-info btn-sm" type="submit">
                                                <i class="fas fa-search fa-fw"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Employment type</th>
                                    <th>Location</th>
                                    <th>Dead line</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    {{--                                    <th>Delete</th>--}}

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
                                        <td>{{$job->status}}</td>
                                        <td><a href="{{url('admin/jobs/edit/'.$job->id)}}" class="btn btn-info">Edit</a>
                                        </td>
                                        {{--                     <td><a href="{{url('admin/jobs/delete/'.$job->id)}}" class="btn btn-danger">Delete</a></td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                            {{ $jobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
