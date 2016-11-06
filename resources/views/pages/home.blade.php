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

<div id="how-do-I-join">
    <div class="inner">
        <h1 class="title">How do I join?</h1>
        <p>To join, follow these steps:</p>

        <div class="list">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi explicabo deserunt quis nemo tempore cumque architecto eos nam dolorem incidunt alias saepe, a, natus nesciunt, hic dolor commodi! Consequuntur, ipsa?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum, in quas neque odit repudiandae maiores consectetur iure, autem modi nisi debitis dolorem voluptatum sed. Minima molestias, at dicta.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt rem vero officia earum ratione aliquid quibusdam cumque ea quo quas facilis dolor eveniet, explicabo quae dolore sapiente veniam qui, debitis.</p>
        </div>

        <a href="#" class="button-red">Join Now</a>
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
@endsection