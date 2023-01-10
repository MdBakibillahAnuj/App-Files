
@extends('admin.admin_master')
@section('title')
    Add Food
@endsection

@section('content')
<div id="layoutSidenav_content">
<div class="card">
    <div class="card-header" style="background-color: #48dbfb">
        <i class="fas fa-table me-1"></i>
        Add Food Table
    </div>
    <div class="card-body">

       <form action="{{ route('store.food') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label">Food Name</label>
                <input type="text" class="form-control" name="food_name" placeholder="Food Name">
                @error('food_name')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                @php
                $category=DB::table('categories')->get();
                @endphp

                <label for="" class="form-label">Category</label>
               <select class="form-select" name="category_id" id="">
                <option type="hidden" >Select Food Category</option>
                @foreach ($category as $category )
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
               </select>
            </div>
        </div>
        {{-- end row --}}


        <div class="row mt-1">
            <div class="col-md-6">
                <label for="" class="form-label">Food Image</label>
                <input type="file" class="form-control" name="image">
                @error('image')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="" class="form-label"> Quantity</label>
                <input type="text" class="form-control" name="food_quantity" placeholder="Food Quantity">
                @error('food_quantity')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- end row --}}

        <div class="row mt-1">
            <div class="col-md-6">
                <label for="" class="form-label"> Selling Price</label>
                <input type="number" class="form-control" name="selling_price">
                @error('selling_price')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="" class="form-label"> Discount Price</label>
                <input type="number" class="form-control" name="discount_price">
                @error('discount_price')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- end row --}}

        <div class="row mt-1">
            <div class="col-md-6">
                <label for="" class="form-label"> Code</label>
                <input type="text" class="form-control" name="food_code">
                @error('food_code')
                    <div class="alert text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="" class="form-label">Details</label>
                <textarea class="form-control" name="food_details" placeholder="Details..." id="floatingTextarea2" style="height: 100px"></textarea>
                @error('food_details')
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

