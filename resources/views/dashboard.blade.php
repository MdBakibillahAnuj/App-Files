@extends('frontend.frontend_master')

@section('title')
Dashboard-page
@endsection
@section('content')
    <section class="bg-dark">
        <br/>
        <br/>
        <br/>
        <br/>
    </section>
 <section class="m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-gray-800">
            </div>
            <div class="col-md-6">

                <div class="card ">
                    <img src="{{ asset('upload/profile.png') }}" alt="" class="card-img-top rounded " style="height: 90px; width:90px; margin-left:40%; ">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ Auth::user()->name }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="">Password Change</a></li>
                            <li class="list-group-item"><a href="">Edit Profile</a></li>
                            <li class="list-group-item"><a href="">Return Order</a></li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('logout') }}" class="btn btn-sm btn-block btn-danger ">Logout</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
 </section>

@endsection
