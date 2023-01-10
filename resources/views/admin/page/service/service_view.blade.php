@extends('admin.admin_master')

@section('title')
Service View-page
@endsection

@section('content')
<div id="layoutSidenav_content">
<div class="card">
    <div class="card-header" style="background-color: #48dbfb">
        <i class="fas fa-table me-1"></i>
        Service Table
    </div>
    <div class="card-body">
        <a class="btn btn-primary" style="float:right; margin-left:5px !important" href="{{ route('add.service') }}">Add  Service</a>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">SN</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($service as $service )
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $service->title}}</td>
                    <td class="text-center">
                        <img src="{{ asset('upload/service/'.$service->image) }}" alt="" style="width:50px;height:50px">
                    </td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ route('edit.service',['id'=>$service->id]) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('delete.service',['id'=>$service->id]) }}" id="delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection

