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
                        <a href="{{ URL::to('learn') }}" class="button-secondary">Forex Apprenticeship</a>
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
        <p>A platform built for traders, by traders. We unite the most dedicated groups of like minded people so that they can learn, trade, and ultimately, make money together.
        Join our fresh community today, and see the markets in an entirely new light.</p>

        <div class="icons">
            <img src="{{ URL::asset('../images/currency-exchange-icon.png') }}" alt="currency exchange icon" />
            <img src="{{ URL::asset('../images/learning-icon.png') }}" alt="thinking icon" />
            <img src="{{ URL::asset('../images/usd-dollar.png') }}" alt="usd dollar" />
        </div>

        <p>Have you prepared for the new retirement reality? In a low return world, you need to take control of your own plans.</p>

        <a href="#" class="button-red">Join Now</a>
    </div>
</div>

<div id="how-do-I-join">
    <div class="inner">
        <h1 class="title">How do I join?</h1>
        <p>To join, follow these steps:</p>

        <div class="list">
            <p><span class="bold">As a trader:</span> Although we have a public community and we welcome everybody to join us with open arms, we only invite the most committed individuals to our private trading groups. This is why we have a small, one time fee of just $500.00 USD. You will receive ongoing support, learning materials, access to private trading groups, exclusive forum section access, and a shiny Investorex Certified badge on our community forums.</p>
            <p><span class="bold">As a fund manager:</span> Are you an existing student looking to advance to the next level, or are you not yet a part of Investorex Group but you still have a solid track record with trading? We are looking to hire 50+ fund managers to manage our private funds, and you may be eligible for a fund. Click here to apply.</p>
            <p><span class="bold">As a member of staff:</span> Given our aggressive growth plans and industry mission, we of course need to standardize our operations and keep the firm clean and organized throughout. We will occasionally have openings, and we are always open to offering a wide variety of internships to those fresh out of college.</p>
        </div>

        <div class="button-group">
            <div class="grid grid--no-gutter">
                <div class="grid__col grid__col--1-of-2">
                    <a href="#" class="button-primary">No Jobs Available</a>
                </div>
                <div class="grid__col grid__col--1-of-2">
                    <a href="{{ URL::to('contact') }}" class="button-secondary">Get in touch</a>
                </div>
            </div>
        </div>
    </div>
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

<div id="pricing">
    <div class="inner">
        <h1 class="title">Pricing</h1>
        <p><span>from</span> $500</p>

        <A href="{{ URL::to('pricing') }}" class="button-red">Start Investing</a>
    </div>
</div>
@endsection
