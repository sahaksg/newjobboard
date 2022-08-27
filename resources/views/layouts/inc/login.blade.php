@extends('layouts.auth')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Job</b>Board</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="#" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="e-mail" name="email" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="password" name="password" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">

                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
                    </div>

                </div>
            </form>




        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection
