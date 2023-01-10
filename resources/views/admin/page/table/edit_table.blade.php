
@extends('admin.admin_master')

@section('title')
    Edit Table View-page
@endsection
@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #48dbfb">
                <i class="fas fa-table me-1"></i>
                Edit Table
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <form action="{{ route('update.table',['id'=>$table->id]) }}" method="POST">
                            @csrf
                            <div class="form-group row mt-3">
                                <label for="name" class="col-md-4 col-form-label">Table Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="{{ $table->name }}"/>
                                </div>
                                @error('name')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row mt-3">
                                <label class="col-md-4 col-form-label">Guest Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="guest_number" class="form-control" value="{{ $table->guest_number }}"/>
                                </div>
                                @error('guest_number')
                                <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group row mt-3">
                                <label for="status" class="col-md-4 col-form-label">Status</label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="status" {{ $table->status == 'pending'? 'checked' : '' }} value="pending" /> Pending</label>
                                    <label><input type="radio" name="status" {{ $table->status == 'available'? 'checked' : '' }} value="available" /> Available</label>
                                    <label><input type="radio" name="status" {{ $table->status == 'unavailable'? 'checked' : '' }} value="unavailable" /> Unavailable</label>
                                </div>
                            </div>

                            <div class="form-group col-md-4 mx-auto">
                                <input type="submit" class="form-control btn btn-success" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


