@extends('admin.admin_master')

@section('title')
    Reservation View-page
@endsection

@section('content')
    <div id="layoutSidenav_content">
        <div class="card">
            <div class="card-header" style="background-color: #08eab3">
                <i class="fas fa-table me-1"></i>
                Reservations
            </div>
            <div class="card-body">
                <a class="btn btn-primary" style="float:right; margin-left:5px !important" href="{{ route('add.reserve') }}">Add Reservation</a>
                <table id="datatablesSimple" class="table">
                    <thead>
                    <tr>
                        <th class="text-center">SN</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone No</th>
                        <th class="text-center">Date & Time</th>
                        <th class="text-center">Table ID</th>
                        <th class="text-center">No OF Guest</th>
                        <th class="text-center">Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($reservations as $reservation )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->res_date }}</td>

                            <td>{{ $reservation->table->name }}</td>
                            <td>{{ $reservation->guest_number }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('edit.reserve',['id'=>$reservation->id]) }}">Edit</a>
                                <a class="btn btn-danger" href="{{ route('delete.reserve',['id'=>$reservation->id]) }}" id="delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


