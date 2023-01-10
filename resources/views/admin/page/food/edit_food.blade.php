
@extends('admin.admin_master')
@section('title')
    Edit Food
@endsection

@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #48dbfb">
                <i class="fas fa-table me-1"></i>
                Edit Food Table
            </div>
            <div class="card-body">

                <form action="{{ route('update.food',['id'=>$food->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Food Name</label>
                            <input type="text" class="form-control" name="food_name" value="{{ $food->food_name }}">

                        </div>

                        <div class="col-md-6">
                            @php
                                $category=DB::table('categories')->get();
                            @endphp

                            <label for="" class="form-label">Category</label>
                            <select class="form-select" name="category_id" id="">
                                <option type="hidden" >Select Food Category</option>
                                @foreach ($category as $category )
                                    <option value="{{ $category->id }}" {{$food->category_id == $category->id ? 'selected' : ''}}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- end row --}}


                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="" class="form-label">Food Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset($food->image) }}" alt="" class="rounded" style="height: 100px; width: 100px; margin-left: 150px; margin-top: 10px;">
                            @error('image')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label"> Quantity</label>
                            <input type="text" class="form-control" name="food_quantity" value="{{ $food->food_quantity }}">

                        </div>
                    </div>
                    {{-- end row --}}

                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="" class="form-label"> Selling Price</label>
                            <input type="number" class="form-control" name="selling_price" value="{{ $food->selling_price }}">

                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label"> Discount Price</label>
                            <input type="number" class="form-control" name="discount_price" value="{{ $food->discount_price }}">

                        </div>
                    </div>
                    {{-- end row --}}

                    <div class="row mt-1">
                        <div class="col-md-6">
                            <label for="" class="form-label"> Code</label>
                            <input type="text" class="form-control" name="food_code" value="{{ $food->food_code }}">

                        </div>

                        <div class="col-md-6">
                            <label for="" class="form-label">Details</label>
                            <textarea class="form-control" name="food_details"  id="floatingTextarea2" style="height: 100px">{!! $food->food_details !!}</textarea>

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

