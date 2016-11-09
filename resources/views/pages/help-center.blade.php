@extends('layouts.app')

@section('content')
<div id="masthead-help">
    <div class="inner">
        <div class="animated zoomIn">
            <h1 class="bold">Help Center</h1>
            <h4>Feel free to pick our brains. We may know more than you think.</h4>
        </div>
    </div>
</div>

<div id="contact-options-section">
    <div class="inner">
        <a href="mailto:investorexgroup@gmail.com">
            <i class="fa fa-envelope-o" aria-hidden="true">
                <p>Email us</p>
            </i>
        </a>
        <a href="#" class="twitter">
            <i class="fa fa-twitter" aria-hidden="true">
                <p>Tweet us</p>
            </i>
        </a>
        <a href="#">
            <i class="fa fa-list-alt" aria-hidden="true">
                <p>Go to our FAQ</p>
            </i>
        </a>
    </div>
</div>
@endsection
