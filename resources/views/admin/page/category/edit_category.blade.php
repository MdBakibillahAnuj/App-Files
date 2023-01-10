
@extends('admin.admin_master')

@section('content')
<div id="layoutSidenav_content">
<div class="card">
    <div class="card-header" style="background-color: #48dbfb">
        <i class="fas fa-table me-1"></i>
        Edit Category Table
    </div>
    <div class="card-body">

       <form action="{{ route('update.category',['id'=>$category->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
        </div>

        <div class="mt-2">
            <label for="" class="form-label"></label>
           <button  type="submit" class="btn btn-primary" >Update</button>
        </div>
       </form>

    </div>
</div>
</div>
@endsection

