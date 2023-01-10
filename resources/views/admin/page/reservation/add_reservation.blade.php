
@extends('admin.admin_master')

@section('title')
    Add Reservation View-page
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #48dbfb">
                <i class="fas fa-table me-1"></i>
                Add Reservation
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <form action="{{ route('store.reserve') }}" method="POST">
                            @csrf
                            <div class="form-group row mt-3">
                                <label for="name" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control"  placeholder="Enter Your Name"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="email" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control"  placeholder="Enter Your Email"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('email')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="phone" class="col-md-4 col-form-label">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('phone')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="res_date" class="col-md-4 col-form-label">Date & Time</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" name="res_date" class="form-control" placeholder="Enter Your Phone Number"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('res_date')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label class="col-md-4 col-form-label">Guest Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="guest_number" class="form-control" min="1" max="7" placeholder="Enter Guest Number"/>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('guest_number')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="status" class="col-md-4 col-form-label">Table</label>
                                <div class="col-md-8">
                                    <select id="table_id" name="table_id" class="form-control">
                                        <option selected><---Select a table----></option>
                                        @foreach($tables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }} (Guest-{{$table->guest_number}})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mx-auto">
                                    @error('table_id')
                                    <div class="alert text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row col-md-4 mx-auto mt-3">
                                <input type="submit" class="form-control btn btn-success" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

