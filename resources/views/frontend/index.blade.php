@extends('frontend.frontend_master')

@section('title')
 Home-Page
@endsection
@section('banner')



    <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image: url({{ asset('frontend/images/bg_1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Feliciano</span>
                        <h1 class="mb-4">Best Restaurant</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url({{ asset('frontend/images/bg_2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Feliciano</span>
                        <h1 class="mb-4">Nutritious &amp; Tasty</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Feliciano</span>
                        <h1 class="mb-4">Delicious Specialties</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url({{ asset('frontend/images/breakfast-1.jpg') }});"></div>
                                    <div class="text text-center">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url({{ asset('frontend/images/breakfast-2.jpg') }});"></div>
                                    <div class="text text-center">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url({{ asset('frontend/images/breakfast-3.jpg') }});"></div>
                                    <div class="text text-center">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="featured-menus ftco-animate">
                                    <div class="menu-img img" style="background-image: url({{ asset('frontend/images/breakfast-4.jpg') }});"></div>
                                    <div class="text text-center">
                                        <h3>Grilled Beef with potatoes</h3>
                                        <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                {{-- <span class="subheading">Specialties</span> --}}
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="align-self-stretch">
            <form action="{{ url('/') }}"  method="GET">
                <div class="form-group col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Food Search" value="{{ request()->query('search') }}">
                    <button class="btn btn-warning mt-2">Search</button>
                </div>
            </form>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
{{--            @php--}}
{{--                $food=DB::table('food')--}}
{{--                ->where('status', 1)--}}
{{--                ->orderBy('id', 'desc')--}}
{{--                ->limit(8)--}}
{{--                ->simplepaginate(8);--}}
{{--            @endphp--}}
            @forelse ($foods as $food  )
               <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                    <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                        <div class="menu-img img" style="background-image: url({{asset($food->image) }});"></div>
                        <div class="text d-flex align-items-center">
                            <div>
                               <div class="d-flex">
                                   <div class="one-half">
                                       <h3>{{ $food->food_name }}</h3>
                                   </div>
                                   <div class="one-forth">
                                        @if ($food->discount_price == null)
                                            <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                            @else
                                            <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                $amount = $food->selling_price - $food->discount_price;
                                                $discount = ($amount / $food->selling_price) * 100;
                                                @endphp
                                                {{ intval($discount) }}%
                                            </span>
                                        @endif
                                   </div>
                               </div>
                                <p>{{ Str::limit($food->food_details,150)}}</p>
                                @if ($food->discount_price==null)
                                <div style="font-size:30px; color:cornflowerblue ">
                                    <span class="price">{{ $food->selling_price }}৳</span>
                                </div>
                                @else
                                <div class="" style="font-size:30px; color:cornflowerblue ">
                                    <span class="price">{{ $food->discount_price}}৳ <s class="" style="color:#ff0000">{{ $food->selling_price}}৳ </s></span>
                                </div>
                                @endif
                                 {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                onclick="productview(this.id)">Order now</a></p> --}}
                                <button id="{{ $food->id }}"
                                  class="product_cart_button addcart" data-toggle="modal"
                                  data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
               </div>
            @empty
                <div class="col-md-8 justify-content-center d-flex">
                    <h2 class="text-secondary font-weight-bolder">No result found for...<strong class="ml-5">"{{ request()->query('search') }}"</strong> </h2>
                </div>
            @endforelse
        </div>
        <div class="mt-3 pt-3 py-5">
            <div class="row col-md-12">
                {{ $foods->links() }}
            </div>
        </div>
    </div>
</section>












{{-- add cart modal --}}
 <!-- Modal -->
 <div class="modal fade" id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLavel"
 aria-hidden="true">
 <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLavel">Product Quick View</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>


         <div class="modal-body">
             <div class="row">
                 <div class="col-md-4">
                     <div class="card">
                         <img src="" id="pimage" style="height: 220px; width: 200px;">
                         <div class="card-body">
                             <h5 class="card-title text-center" id="pname"> </h5>

                         </div>

                     </div>

                 </div>


                 <div class="col-md-4">
                     <ul class="list-group">
                         <li class="list-group-item">Product Code:<span id="pcode"></span> </li>
                         <li class="list-group-item">Category: <span id="pcat"></span></li>
                         <li class="list-group-item">Stock: <span class="badge"
                                 style="background: green;color: white;"> Available</span> </li>
                     </ul>

                 </div>

                 <div class="col-md-4">

                     <form method="post" action="{{ route('insert.into.cart') }}">
                         @csrf
                         <input type="hidden" name="product_id" id="product_id">


                         <div class="form-group">
{{--                             <label for="exampleInputcolor">Quantity</label>--}}
{{--                             <input type="number" class="form-control" name="food_quantity" min="1" max="6" value="1">--}}
                            <label>Quantity</label>
                             <select class="form-select" name="food_quantity">
                                 <option selected value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                             </select>
                         </div>

                         <div class="py-5 mt-5">
                             <button type="submit" class="btn btn-primary">Add to Cart </button>
                         </div>


                     </form>
                 </div>

             </div>
         </div>

         <div class="modal-footer">

         </div>
     </div>
 </div>
</div>









        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



    {{-- modal ajax --}}
    <script type="text/javascript">
        function productview(id) {
            $.ajax({
                url: "{{ url('/cart/product/view/') }}/" + id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // console.log(data);
                    $('#pcode').text(data.product.food_code);
                    $('#pcat').text(data.product.category_name);
                    $('#pname').text(data.product.food_name);
                    $('#pimage').attr('src', data.product.image);
                    $('#product_id').val(data.product.id);
                }
            })
        }
    </script>

@endsection
