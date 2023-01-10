@extends('admin.admin_master')

@section('content')

@php

    $category=DB::table('categories')->get();
    $user=DB::table('users')->get();
    $food=DB::table('food')->get();
    $table=DB::table('tables')->get();
    $reservations=DB::table('reservations')->get();
@endphp
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <a href="{{ route('view.category') }}" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                Total Category
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h2 class=" text-white stretched-link" > {{ $category->count() }}</h2>
                                <div class="small text-white"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <a href="{{ route('view.food') }}" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                Total Food Menu
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h2 class=" text-white stretched-link" > {{ $food->count() }}</h2>
                                <div class="small text-white"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <a href="{{ route('view.table') }}" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                Total Tables
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h2 class=" text-white stretched-link" > {{ $table->count() }}</h2>
                                <div class="small text-white"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <a href="{{ route('view.reserve') }}" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                Total Reservations
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h2 class=" text-white stretched-link" > {{ $reservations->count() }}</h2>
                                <div class="small text-white"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="#" style="text-decoration: none; color: white;">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                Total User
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <h2 class=" text-white stretched-link" > {{ $user->count() }}</h2>
                                <div class="small text-white"></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Hungry Brunch
                    2022</div>
                <div>
                    <a href="#"></a>
                    &middot;
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
