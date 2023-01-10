@extends('admin.admin_master')

@section('title')
    Fodd View-page
@endsection

@section('content')
<div id="layoutSidenav_content">
<div class="card">
    <div class="card-header" style="background-color: #08eab3">
        <i class="fas fa-table me-1"></i>
        Food Table
    </div>
    <div class="card-body">
        <a class="btn btn-primary" style="float:right; margin-left:5px !important" href="{{ route('add.food') }}">Add  Food</a>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">SN</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($food as $foods )
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $foods->food_name }}</td>
                    <td class="text-center">{{ $foods->category->category_name }}</td>
                    <td class="text-center">
                        <img src="{{ asset($foods->image) }}" alt="" style="width:50px;height:50px">
                    </td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ route('edit.food',['id'=>$foods->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('delete.food',['id'=>$foods->id]) }}" id="delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection

