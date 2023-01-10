<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function viewService(){

        $service=Service::all();
        return view('admin.page.service.service_view',compact('service'));
    }

    public function addService(){
        return view('admin.page.service.add_service');
    }

    public function storeService(Request $request){

        $validated = $request->validate([
            'title'=> 'required',
            'description'=>'required',
        ]);

        $service=new Service();
        $service->title=$request->title;
        $service->description=$request->description;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
            $file-> move(public_path('upload/service'), $filename);
            $service['image']= $filename;
        }
        $service->save();

        $notification = array(
            'message' => 'Successfully food Insert',
            'alert-type' => 'success'
        );
        return redirect()->route('view.service')->with($notification);
    }

    public function editService($id){
        $service=Service::find($id);
        return view('admin.page.service.edit_service',compact('service'));
    }

    public function updateService(Request $request, $id){

        $service=Service::find($id);
        $service->title=$request->title;
        $service->description=$request->description;

        $image_one=$service->image;

        if($request->file('image')){
            $file= $request->file('image');
            @unlink('upload/service'.$image_one);
            $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
            $file-> move(public_path('upload/service'), $filename);
            $service['image']= $filename;
        }
        $service->update();

        $notification = array(
            'message' => 'Successfully food Insert',
            'alert-type' => 'success'
        );

        return redirect()->route('view.service')->with($notification);
    }

    public function deleteService($id){
        $service=Service::find($id);
        $image_one=$service->image;
        @unlink('upload/service'.$image_one);
        $service->delete();
        return redirect()->back();
    }

}
