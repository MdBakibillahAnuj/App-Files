
@extends('admin.admin_master')

@section('content')
<div id="layoutSidenav_content">
<div class="card">
    <div class="card-header" style="background-color: #48dbfb">
        <i class="fas fa-table me-1"></i>
        Add Category Table
    </div>
    <div class="card-body">

       <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="category_name" placeholder="Category Name...">
            @error('category_name')
                <div class="alert text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-2">
            <label for="" class="form-label"></label>
           <button  type="submit" class="btn btn-primary" >Submit</button>
        </div>
       </form>

    </div>
</div>
</div>
@endsection

