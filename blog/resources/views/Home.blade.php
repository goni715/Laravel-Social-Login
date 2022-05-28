@extends('Layout.app')
@section('title','HomePage')


@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4> User Login</h4> <hr>
                    <a href="/CallGitHub" class="btn btn-primary text-white w-100 btn-social btn-microsoft mb-3">
                        <span class="fa fa-GitHub"></span> Sign in with GitHub
                    </a>
                    <a href="/CallGitHub" class="btn bg-dark text-white w-100 btn-social btn-microsoft">
                        <span class="fa fa-GitHub"></span> Sign Up with GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection