<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Hungry Brunch</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('view.menu') }}" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="{{ route('view.about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('view.contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="{{ route('view.reservation') }}" class="nav-link">Book a table</a></li>
          @auth
          <li class="nav-item bg-secondary ml-2"><a href="{{ route('dashboard') }}" class="nav-link">{{ Auth::user()->name }}</a></li>
          @else
          <li class="nav-item "><a href="{{ route('login') }}" class="nav-link">Registration/Login</a></li>
          @endauth
          <li class="nav-item "><a href="{{ route('cart.show') }}"><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary text-white">{{ Cart::count()}}</span>
                  <img src="{{ asset('frontend/images/cart.png') }}" alt="" style="width:50px"><span class="badge badge-primary">৳{{ Cart::subtotal() }}</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
