@extends('layouts.app')

@section('content')
    <div id="masthead-contact">
        <div class="inner">
            <div class="animated zoomIn">
                <h1 class="bold">Contact us</h1>
                <h4>Have a question or query? Please contact us.</h4>
            </div>
        </div>
    </div>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <form class="inner" action="{{ URL('contact') }}" method="post">
        {{ csrf_field() }}
        <label for="email">Email Address</label>
        <input type="email" name="email" placeholder="Email Address">

        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="Subject Line">

        <label for="message">Message</label>
        <textarea name="message" rows="8" cols="40"></textarea>

        <input type="submit" value="Send Message" class="button-border">
    </form>
@endsection
