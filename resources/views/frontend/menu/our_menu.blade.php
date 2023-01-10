@extends('frontend.frontend_master')

@section('title')
    Menu-Page
@endsection
@section('banner')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Specialties</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Breakfast</a>

                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>

                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>

                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>

                            <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Special</a>

                            <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Ice Cream</a>

                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($categoris1 as $category1  )
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                                                <div class="menu-img img" style="background-image: url({{asset($category1->image) }});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{ $category1->food_name }}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                @if ($category1->discount_price == null)
                                                                    <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                                                @else
                                                                    <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                    $amount = $category1->selling_price - $category1->discount_price;
                                                    $discount = ($amount / $category1->selling_price) * 100;
                                                @endphp
                                                                        {{ intval($discount) }}%
                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p>{{ Str::limit($category1->food_details,150)}}</p>
                                                        @if ($category1->discount_price==null)
                                                            <div style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category1->selling_price }}৳</span>
                                                            </div>
                                                        @else
                                                            <div class="" style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category1->discount_price}}৳ <s class="" style="color:#ff0000">{{ $category1->selling_price}}৳ </s></span>
                                                            </div>
                                                        @endif
                                                        {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                                       onclick="productview(this.id)">Order now</a></p> --}}
                                                        <button id="{{ $category1->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($categoris2 as $category2  )
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                                                <div class="menu-img img" style="background-image: url({{asset($category2->image) }});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{ $category2->food_name }}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                @if ($category2->discount_price == null)
                                                                    <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                                                @else
                                                                    <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                    $amount = $category2->selling_price - $category2->discount_price;
                                                    $discount = ($amount / $category2->selling_price) * 100;
                                                @endphp
                                                                        {{ intval($discount) }}%
                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p>{{ Str::limit($category2->food_details,150)}}</p>
                                                        @if ($category2->discount_price==null)
                                                            <div style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category2->selling_price }}৳</span>
                                                            </div>
                                                        @else
                                                            <div class="" style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category2->discount_price}}৳ <s class="" style="color:#ff0000">{{ $category2->selling_price}}৳ </s></span>
                                                            </div>
                                                        @endif
                                                        {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                                       onclick="productview(this.id)">Order now</a></p> --}}
                                                        <button id="{{ $category2->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($categoris3 as $category3  )
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                                                <div class="menu-img img" style="background-image: url({{asset($category3->image) }});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{ $category3->food_name }}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                @if ($category3->discount_price == null)
                                                                    <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                                                @else
                                                                    <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                    $amount = $category3->selling_price - $category3->discount_price;
                                                    $discount = ($amount / $category3->selling_price) * 100;
                                                @endphp
                                                                        {{ intval($discount) }}%
                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p>{{ Str::limit($category3->food_details,150)}}</p>
                                                        @if ($category3->discount_price==null)
                                                            <div style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category3->selling_price }}৳</span>
                                                            </div>
                                                        @else
                                                            <div class="" style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category3->discount_price}}৳ <s class="" style="color:#ff0000">{{ $category3->selling_price}}৳ </s></span>
                                                            </div>
                                                        @endif
                                                        {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                                       onclick="productview(this.id)">Order now</a></p> --}}
                                                        <button id="{{ $category3->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($categoris6 as $category6  )
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                                                <div class="menu-img img" style="background-image: url({{asset($category6->image) }});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{ $category6->food_name }}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                @if ($category6->discount_price == null)
                                                                    <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                                                @else
                                                                    <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                    $amount = $category6->selling_price - $category6->discount_price;
                                                    $discount = ($amount / $category6->selling_price) * 100;
                                                @endphp
                                                                        {{ intval($discount) }}%
                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p>{{ Str::limit($category6->food_details,150)}}</p>
                                                        @if ($category6->discount_price==null)
                                                            <div style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category6->selling_price }}৳</span>
                                                            </div>
                                                        @else
                                                            <div class="" style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category6->discount_price}}৳ <s class="" style="color:#ff0000">{{ $category6->selling_price}}৳ </s></span>
                                                            </div>
                                                        @endif
                                                        {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                                       onclick="productview(this.id)">Order now</a></p> --}}
                                                        <button id="{{ $category6->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($categoris5 as $category5  )
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                                                <div class="menu-img img" style="background-image: url({{asset($category5->image) }});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{ $category5->food_name }}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                @if ($category5->discount_price == null)
                                                                    <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                                                @else
                                                                    <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                    $amount = $category5->selling_price - $category5->discount_price;
                                                    $discount = ($amount / $category5->selling_price) * 100;
                                                @endphp
                                                                        {{ intval($discount) }}%
                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p>{{ Str::limit($category5->food_details,150)}}</p>
                                                        @if ($category5->discount_price==null)
                                                            <div style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category5->selling_price }}৳</span>
                                                            </div>
                                                        @else
                                                            <div class="" style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category5->discount_price}}৳ <s class="" style="color:#ff0000">{{ $category5->selling_price}}৳ </s></span>
                                                            </div>
                                                        @endif
                                                        {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                                       onclick="productview(this.id)">Order now</a></p> --}}
                                                        <button id="{{ $category5->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    @foreach ($categoris4 as $category4  )
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="margin: 10px;">
                                                <div class="menu-img img" style="background-image: url({{asset($category4->image) }});"></div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3>{{ $category4->food_name }}</h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                @if ($category4->discount_price == null)
                                                                    <span class="text-white p-1"style="background-color:green;border-radius:100%">new</span>
                                                                @else
                                                                    <span class="text-white p-1"style="background-color:red;border-radius:100%">
                                                @php
                                                    $amount = $category4->selling_price - $category4->discount_price;
                                                    $discount = ($amount / $category4->selling_price) * 100;
                                                @endphp
                                                                        {{ intval($discount) }}%
                                            </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <p>{{ Str::limit($category1->food_details,150)}}</p>
                                                        @if ($category1->discount_price==null)
                                                            <div style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category4->selling_price }}৳</span>
                                                            </div>
                                                        @else
                                                            <div class="" style="font-size:30px; color:cornflowerblue ">
                                                                <span class="price">{{ $category4->discount_price}}৳ <s class="" style="color:#ff0000">{{ $category4->selling_price}}৳ </s></span>
                                                            </div>
                                                        @endif
                                                        {{-- <p><a href="#"id="{{ $food->id }}"type="button" class=" product_cart_button addcart btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                                       onclick="productview(this.id)">Order now</a></p> --}}
                                                        <button id="{{ $category4->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <label for="exampleInputcolor">Quantity</label>
                                    <input type="number" class="form-control" name="food_quantity" min="1" max="6" value="1">
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

