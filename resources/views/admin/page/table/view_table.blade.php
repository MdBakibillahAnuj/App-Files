@extends('admin.admin_master')

@section('title')
    Table View-page
@endsection

@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #08eab3">
                <i class="fas fa-table me-1"></i>
                All Table
            </div>
            <div class="card-body">
                <a class="btn btn-primary" style="float:right; margin-left:5px !important" href="{{ route('add.table') }}">Add Table</a>
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th class="text-center">SN</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Guest</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($tables as $table )
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $table->name }}</td>
                            <td class="text-center">{{ $table->guest_number }}</td>
                            <td class="text-center">{{ $table->status }}</td>

                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('edit.table',['id'=>$table->id]) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('delete.table',['id'=>$table->id]) }}" id="delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


