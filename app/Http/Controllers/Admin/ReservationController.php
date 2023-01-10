<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Carbon;

class ReservationController extends Controller
{
    public function viewReserve(){
        $reservations = Reservation::orderBy('id', 'DESC')->get();
        return view('admin.page.reservation.view_reservation', compact('reservations'));
    }
    public function addReserve(){
        $tables = Table::where('status', 'available')->get();
        return view('admin.page.reservation.add_reservation',compact('tables'));
    }
    public function storeReserve(Request $request){
//        return $req_timestamp = Carbon::parse($request->res_date)->format('d m y');
//        $table = Table::findOrFail($request->table_id);
//        $gust = Table::all();
//        if ($request->guest_number > $gust->guest_number){
//            return redirect()->back()->with('message', 'Please choose the table base on guests');
//        }

        $validated = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'res_date'=> 'required|$reservations',
            'table_id'=> 'required',
            'guest_number'=> 'required',
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->res_date = $request->res_date;
        $reservation->table_id = $request->table_id;
        $reservation->guest_number = $request->guest_number;
        $reservation->save();

        $notification = array(
            'message' => 'Successfully Reservation Insert',
            'alert-type' => 'success'
        );
        return redirect()->route('view.reserve')->with($notification);
    }
}
