<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function viewFood(){
        $food=Food::orderBy('id', 'DESC')->get();
        return view('admin.page.food.food_view',compact('food'));
    }

    public function addFood(){
        return view('admin.page.food.add_food');
    }

    public function storeFood(Request $request){

        $validated = $request->validate([
            'food_name'=> 'required',
            'category_id'=> 'required',
            'food_code'=> 'required',
            'food_quantity'=> 'required',
            'selling_price'=> 'required',

        ]);

        $data=new Food();
        $data->food_name        =$request->food_name;
        $data->category_id      =$request->category_id;
        $data->food_code        =$request->food_code;
        $data->food_quantity    =$request->food_quantity;
        $data->food_details     =$request->food_details;
        $data->selling_price    =$request->selling_price;
        $data->discount_price   =$request->discount_price;
        $data->status=1;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
            $file-> move(public_path('/'), $filename);
            $data['image']= $filename;
        }
        $data->save();

                $notification = array(
                    'message' => 'Successfully food Insert',
                    'alert-type' => 'success'
                );
                return redirect()->route('view.food')->with($notification);

    }

    public function editFood($id){
        $food=Food::find($id);
        return view('admin.page.food.edit_food',compact('food'));
    }
    public function updateFood(Request $request,$id)
    {

        $data=Food::find($id);
        $data->food_name        =$request->food_name;
        $data->category_id      =$request->category_id;
        $data->food_code        =$request->food_code;
        $data->food_quantity    =$request->food_quantity;
        $data->food_details     =$request->food_details;
        $data->selling_price    =$request->selling_price;
        $data->discount_price   =$request->discount_price;
        $data->status=1;
        $img = $data->image;

        if($request->file('image')){
            $file= $request->file('image');
            @unlink($img);
            $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
            $file-> move(public_path('/'), $filename);
            $data['image']= $filename;
        }
        $data->update();
        $notification = array(
            'message' => 'Successfully Food Update',
            'alert-type' => 'success'
        );
        return redirect()->route('view.food')->with($notification);

    }
    public function deleteFood($id){
        $food = Food::find($id);
        @unlink(public_path('/' .$food->image));
        $food->delete();
        return redirect()->back();
    }
}
