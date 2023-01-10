@extends('frontend.frontend_master')

@section('title')
    Shopping Cart-Page
@endsection
@section('banner')
   <section class="bg-dark">
       <br/>
       <br/>
       <br/>
       <br/>
   </section>

@endsection
@section('content')

    <section class="py-3">
        <div class="container bg-primary">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h3 class="text-secondary text-center font-weight-bolder">Order Details</h3>
                    <span>< {{ Cart::count()}} >Items in Your Cart</span>
                    <table class="table">
                        <tr class="table_head">
                            <th>Product name</th>
                            <th>Product img</th>
                            <th>Price</th>
                            <th>Product Qty</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                        @php
                            $data = Cart::content();
                            $total = 0;
                        @endphp
                        @foreach($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>
                                    <div class="one">
                                        <img src="{{asset('/'.$data->options->image)}}" alt="" style="height: 150px; width: 140px; background-color: #ffffff; border-radius: 5px;">
                                    </div>
                                </td>
                                <td>৳ {{$data->price}} </td>
                                <td>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <br>
                                        <form method="post" action="{{ route('update.cartItem') }}">
                                            @csrf
                                            <input type="hidden" name="productid" value="{{ $data->rowId }}">
                                            <input type="number" name="qty" min="1" max="6" value="{{ $data->qty }}" style="width: 100px;">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>
                                    </div>
                                </td>
                                <td>৳ {{$data->subtotal}} </td>
                                <td><a href="{{ route('cart.remove',['id'=>$data->rowId]) }}" class="btn btn-danger">Remove</a></td>
                            </tr>
                            @php
                                $total += $data->subtotal;

                            @endphp

                        @endforeach
                    </table>
                    <hr class="bg-dark">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-3">
        <div class="container">
           <div class="row">
               <div class="col-md-6 bg-info">
                   <div class="col-md-12 d-block justify-content-center">
                      <div class="row justify-content-center">
                          <div class="row col-md-8 justify-content-between">
                              @php
                                  if ($total == 0){
                                        $dvc= 0;
                                    }else{
                                        $dvc = 50;
                                    }
                                      $addAll = 0;

                                      $addAll = $total + $dvc;
                              @endphp
                              <div class="col-md-6">
                                  <h5>Total Price</h5>
                              </div>
                              <div class="col-md-6">
                                  <h5>৳ {{ $total }} </h5>
                              </div>
                          </div>
                          <div class="row col-md-10 justify-content-between">
                              <div class="col-md-6">
                                  <h5>Delivery charge</h5>
                              </div>
                              <div class="col-md-6">
                                  <h5>৳ {{$dvc}} </h5>
                              </div>
                          </div>
                          <div class="row col-md-8 justify-content-between">
                              <div class="col-md-6">
                                  <hr>
                                  <h4>Total</h4>
                              </div>
                              <div class="col-md-6">
                                  <hr>

                                  <h4>৳ {{$addAll}}</h4>
                              </div>
                          </div>
                          <div class="div col-md-8 justify-content-between">
                              <button class="btn btn-secondary mb-3"><a href="{{ route('view.home') }}">Order More</a></button>
                              <a href="" class="btn bg-primary mb-3 ml-2">CheckOut</a>
                          </div>
                      </div>
                   </div>

               </div>
           </div>
        </div>
    </section>

@endsection
