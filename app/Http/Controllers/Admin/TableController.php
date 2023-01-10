<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function viewTable(){
        $tables = Table::all();
        return view('admin.page.table.view_table', compact('tables'));
    }
    public function addTable(){
        return view('admin.page.table.add_table');
    }
    public function storeTable(Request $request){
        $validated = $request->validate([
            'name'=> 'required',
            'guest_number'=> 'required',
            'status'=> 'required'
        ]);

        $table = new Table();
        $table->name = $request->name;
        $table->guest_number = $request->guest_number;
        $table->status = $request->status;
        $table->save();

        $notification = array(
            'message' => 'Successfully Table Insert',
            'alert-type' => 'success'
        );
        return redirect()->route('view.table')->with($notification);
    }
    public function editTable($id)
    {
        $table = Table::find($id);
        return view('admin.page.table.edit_table', compact('table'));
    }
    public function updateTable(Request $request,$id){
        $table=Table::find($id);
        $table->name = $request->name;
        $table->guest_number = $request->guest_number;
        $table->status = $request->status;
        $table->save();

        $notification = array(
            'message' => 'Successfully Table Update',
            'alert-type' => 'success'
        );
        return redirect()->route('view.table')->with($notification);
    }
    public function deleteTable($id){
        $data = Table::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Table Deleted',
            'alert-type' => 'danger'
        );
        return redirect()->route('view.table')->with($notification);
    }
}
