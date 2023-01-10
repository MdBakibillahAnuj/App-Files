
@extends('admin.admin_master')

@section('title')
    Add View-page
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #48dbfb">
                <i class="fas fa-table me-1"></i>
                Add Table
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <form action="{{ route('store.table') }}" method="POST">
                            @csrf
                            <div class="form-group row mt-3">
                                <label for="name" class="col-md-4 col-form-label">Table Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Table Name"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label class="col-md-4 col-form-label">Guest Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="guest_number" class="form-control" placeholder="Enter Guest Number"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('guest_number')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="status" class="col-md-4 col-form-label">Status</label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="status" checked value="pending" /> Pending</label>
                                    <label><input type="radio" name="status" value="available" /> Available</label>
                                    <label><input type="radio" name="status" value="unavailable" /> Unavailable</label>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('status')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-4 mx-auto">
                                <input type="submit" class="form-control btn btn-success" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

