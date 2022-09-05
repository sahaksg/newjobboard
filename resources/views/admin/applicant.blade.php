@extends('layouts.master')
@section('title','Jobboard Admin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>CV</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($applicants as $applicant)
                                <tr>
                                    <td>{{$applicant->job_title}}</td>
                                    <td>{{$applicant->name}}</td>
                                    <td>{{$applicant->email}}</td>
                                    <td>{{$applicant->description}}</td>
                                    <td>{{$applicant->created_at}}</td>
                                    <td><a href='{{asset('storage/cv/'.$applicant->resume)}}'>{{$applicant->resume}}</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                            {{ $applicants->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
