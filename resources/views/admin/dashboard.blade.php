@extends('layouts.master')
@section('title','Jobboard Admin')
@section('content')
{{--    {{dd($datas)}}--}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Applications</th>
                                    <th>Views</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($datas as $data)
                                    <tr>
                                        <td>{{$data->job_title}}</td>
                                        <td>{{$data->applications}}</td>
                                        <td>{{$data->views}}</td>

                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
{{--                            {{ $jobs->links() }}--}}
                        </div>

                    </div>




                </div>

            </div>

        </div>

    </section>
@endsection
{{--{{dd($data)}}--}}
