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
        <a href="{{ URL::to('/#faq') }}">
            <i class="fa fa-list-alt" aria-hidden="true">
                <p>Go to our FAQ</p>
            </i>
        </a>
    </div>

    <div id="faq">
        <div class="inner">
            <h1 class="title">FAQ</h1>
            <p>Answers to the questions we get asked the most.</p>

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
</div>
@endsection
