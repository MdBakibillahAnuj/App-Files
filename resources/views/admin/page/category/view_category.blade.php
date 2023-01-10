@extends('admin.admin_master')

@section('content')
<div id="layoutSidenav_content">
<div class="card">
    <div class="card-header" style="background-color: #48dbfb">
        <i class="fas fa-table me-1"></i>
        Category Table
    </div>
    <div class="card-body">
        <a class="btn btn-primary" style="float:right; margin-left:5px !important" href="{{ route('add.category') }}">Add Category</a>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">SN</th>
                    <th class="w-75 text-center">Name</th>
                    <th class="text-center">Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($category as $categories )
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $categories->category_name }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ route('edit.category',['id'=>$categories->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('delete.category',['id'=>$categories->id]) }}" id="delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection

