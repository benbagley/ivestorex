@extends('layouts.app')

@section('content')
<div id="masthead-index">
    <div class="inner">
        <div class="animated zoomIn">
            <h1>Welcome to <span class="bold">Investorex</span></h1>
            <h4>World class Forex Education and Wealth Management</h4>

            <div class="button-group">
                <div class="grid grid--no-gutter">
                    <div class="grid__col grid__col--1-of-2">
                        <a href="#" class="button-primary">Fund Management</a>
                    </div>
                    <div class="grid__col grid__col--1-of-2">
                        <a href="#" class="button-secondary">Forex Apprenticeship</a>
                    </div>
                </div>
            </div>

            <h4>Exposing the bank's <span class="bold">dirty little secrets</span> that they do not want you to know.</h4>
        </div>
    </div>
</div>

<div id="what-we-do">
    <div class="inner">
        <h1 class="title">What we do</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolorum, magnam, voluptates tenetur natus minima sed quam laborum nesciunt est, minus, quibusdam suscipit unde ipsum cupiditate voluptatum earum iusto sapiente.</p>
        <a href="#" class="button-red">Join Now</a>
    </div>
</div>

<div id="faq">
    <div class="inner">
        <h1 class="title">FAQ</h1>
        <section id="accordion">
            <div>
                <input type="checkbox" id="check-1" />
                <label for="check-1">Option 1</label>
                <article>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, tempore laudantium eveniet reprehenderit, deleniti eum? Provident quo magni ea ad corporis excepturi, reiciendis quis voluptatem. Dicta animi nobis rem quisquam!</p>
                </article>
            </div>
            <div>
                <input type="checkbox" id="check-2" />
                <label for="check-2">Option 2</label>
                    <article>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti reiciendis corporis porro in exercitationem incidunt, est veniam aspernatur, possimus id temporibus quibusdam cum ea expedita quos perferendis neque? Veritatis, repellendus.</p>
                    </article>
            </div>
            <div>
                <input type="checkbox" id="check-3" />
                <label for="check-3">Option 3</label>
                <article>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At iure error repudiandae porro cumque a, adipisci, ratione animi fugit esse nemo? Vitae expedita eius, necessitatibus, praesentium doloremque illum dolorem nostrum.</p>
                </article>
            </div>
        </section>
    </div>
</div>
@endsection