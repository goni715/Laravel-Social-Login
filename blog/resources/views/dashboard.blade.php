@extends('Layout.app')
@section('title','Dashboard')


@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <img src="{{Session::get('img')}}" alt="" class="w-25" style="object-fit:cover; width:110px; height:180px; border-radius: 5%;">

                    <table class="table mt-4 table-bordered">
                           <tr>
                               <td>User ID</td>
                               <td>{{Session::get('img')}}</td>
                           </tr>

                           <tr>
                               <td>Nick Name</td>
                               <td>{{Session::get('nickName')}}</td>
                           </tr>

                           <tr>
                               <td>Full Name</td>
                               <td>{{Session::get('name')}}</td>
                           </tr>

                           <tr>
                               <td>Email</td>
                               <td>{{Session::get('email')}}</td>
                           </tr>

                           <tr>
                               <td>Token</td>
                               <td>{{Session::get('token')}}</td>
                           </tr>
                    </table>
                    <a href="/Logout" class="btn btn-primary text-white">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection