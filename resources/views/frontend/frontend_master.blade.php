<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.include.css')
  </head>
  <body>
    {{-- top header --}}
    @include('frontend.include.top_header')

    {{-- navbar --}}
	 @include('frontend.include.navbar')
    <!-- END nav -->

        {{-- banner part --}}
{{--        @include('frontend.include.banner')--}}


        {{-- under_banner --}}
{{--        @include('frontend.include.under_banner')--}}
        @yield('banner')

		@yield('content')

    @include('frontend.include.footer')


  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}

 @include('frontend.include.js')

  </body>
</html>
