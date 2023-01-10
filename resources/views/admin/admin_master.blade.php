<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard </title>
        {{-- css file --}}
        @include('admin.include.css')

    </head>
    <body class="sb-nav-fixed">
      @include('admin.include.header')

        <div id="layoutSidenav">
            {{-- sidebar file --}}
           @include('admin.include.sidebar')

           @yield('content')
        </div>
       @include('admin.include.js')
    </body>
</html>
