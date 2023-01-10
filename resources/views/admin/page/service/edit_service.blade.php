
@extends('admin.admin_master')

@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #48dbfb">
                <i class="fas fa-table me-1"></i>
                Edit Service Table
            </div>
            <div class="card-body">

                <form action="{{ route('update.service',['id'=>$service->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                            @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-md-6">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{(asset('upload/service/'.$service->image)) }}" alt="" class="rounded" style="height: 100px; width: 100px; margin-left: 150px; margin-top: 10px;/">
                            @error('image')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- end row --}}


                    <div class="row mt-1">
                        <div class="col-md-12">
                            <label for="" class="form-label">Details</label>
                            <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px">{!! $service->description !!}</textarea>
                            @error('description')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- end row --}}


                    <div class="mt-2">
                        <label for="" class="form-label"></label>
                        <button  type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection

