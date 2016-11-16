<div id="main-navigation" class="animated bounceInDown">
    <div class="inner">
        <div class="navigation-left">
            <a href="{{ URL::to('/') }}"><img src="{{URL::asset('/images/logo.png')}}"></a>
        </div>

        <div class="hamburger-menu">
            <div class="bar"></div>
        </div>

        <div class="navigation-right">
            <a href="{{ URL::to('learn') }}">Learn</a>
            <a href="#">Community</a>
            <a href="{{ URL::to('help') }}">Help Center</a>
            <a href="{{ URL::to('contact') }}" class="button-border">Contact</a>
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
