<div class="topheader"></div>

<div id="main-navigation">
  <div class="inner">
    <div class="navigation-left">
      <img src="{{URL::asset('/images/logo.png')}}">
    </div>

    <a href="#" id="mobile-navigation"><i class="fa fa-bars"></i></a>

    <div class="navigation-right">
      <a href="#">Learn</a>
      <a href="#">Community</a>
      <a href="#">Help Center</a>
      <a href="#" class="button-border">Contact</a>
    </div>
  </div>
</div>

<div class="flex-center position-ref full-height">
  @if (Route::has('login'))
  <div class="top-right links">
    @if (Auth::check())
      <a href="{{ url('/home') }}">Home</a>
    @else
      <a href="{{ url('/login') }}">Login</a>
      <a href="{{ url('/register') }}">Register</a>
    @endif
  </div>
  @endif
</div>