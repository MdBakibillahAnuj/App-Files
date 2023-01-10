@extends('frontend.frontend_master')


@section('content')
<section>
    <div class="container col-12 bg-dark">
        <br/>
        <br/>
        <br/>
    </div>
</section>
<section class="m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="p-5" style="border: 1px solid red">
                <h2 class="text-center">Login Form</h2>

                    <form method="POST" id="contact_form" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                        @csrf
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="email" name="email" id="" class="form-control" placeholder="Enter E-mail">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
                              </div>

                              <div class="form-group">
                                <a href="#">---></a>
                                <a href="{{ route('password.request') }}" class="forgot-pass" style="float: right">Forgotpassword</a>
                            </div>
                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button">Login</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-5">
                <div class="p-5" style="border: 1px solid red">
                    <h2 class="text-center">Registration Form</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text"class="form-control" id="name" name="name" placeholder="Enter your username">
                            @error('name')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">User Email</label>
                            <input type="email"class="form-control" id="email" name="email" placeholder="Enter your user-email">
                            @error('email')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">User Phone Number</label>
                            <input type="number"class="form-control" id="phone" name="phone" placeholder="Enter your user-phone number">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"class="form-control" id="password" name="password" placeholder="Enter your password">
                            @error('password')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password"class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required="">
                        </div>


                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button">SignUp</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
