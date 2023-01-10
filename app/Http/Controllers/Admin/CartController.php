<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;



class CartController extends Controller
{
    public function ModalCartView($id){
        $product = DB::table('food')
        ->join('categories','food.category_id','categories.id')
        ->select('food.*','categories.category_name')
        ->where('food.id',$id)
        ->first();


        return response(array(
        'product' => $product,
        ));

    }


    public function ModalCartInsert(Request $request){

        $id=$request->product_id;
        $product=DB::table('food')->where('id',$id)->first();

        $qty= 0;
        $qty=$request->food_quantity;


        $data = array();
        if($product->discount_price==null){
            $data['id']=$product->id;
            $data['name']=$product->food_name;
            $data['qty']=$request->food_quantity;
            $data['price']=$product->selling_price;
            $data['options']['image']=$product->image;
            $data['weight']=1;

            Cart::add($data);

            $notification = array(
                'message' => 'Product added successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            $data['id']=$product->id;
            $data['name']=$product->food_name;
            $data['qty']=$request->food_quantity;
            $data['price']=$product->discount_price;
            $data['options']['image']=$product->image;
            $data['weight']=1;

            Cart::add($data);

            $notification = array(
                'message' => 'Product added successfully',
                'alert-type' => 'success'
            );
//            return view('frontend.cart.cart');
            return redirect()->back()->with($notification);
//            return response (['success' => 'Successfully added on your Cart']);

        }
    }

    public function ShowCart(){
        $data =Cart::content();
        return view('frontend.cart.cart',compact('data'));
    }

    public function CartRemove($id){
        Cart::remove($id);
        $notification = array(
            'message' => 'Product Remove from  Cart ',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function CartItemUpdate(Request $request){

        $validated = $request->validate([
            'qty'=> 'required|max:6|min:1',
        ]);

        $rowId=$request->productid;
        $qty=$request->qty;
        Cart::update($rowId,$qty);

        $notification = array(
            'message' => 'Product Item updated successfully ',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function CheckOut(){
        $cart=Cart::content();
        return view('frontend.cart.checkout',compact('cart'));

//        if(Auth::check()){
//            $cart=Cart::content();
//            return view('frontend.cart.checkout',compact('cart'));
//        }else{
//
//            $notification = array(
//                'message' => 'At first login you account',
//                'alert-type' => 'warning'
//            );
//            return redirect()->route('login')->with($notification);
//
//        }
    }



}
