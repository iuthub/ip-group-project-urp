@extends('layout.main')

@section('content-title')
    Events
@endsection

@section('content-body')
    <br><br>
    <div class="events">
        <h3>Coming Events</h3>
        <div class="events_branch">
        <div class="blog-card">
            <div class="meta">
                <div class="photo" style="background-image: url(/img/event1.jpg)"></div>
            </div>
            <div class="description">
                <h1>Intersectionality Matters: A Conversation with Kimberlé Crenshaw</h1>
                <h2>Fri, Jun 19, 6:00 PM</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="/events">Read More</a>
                </p>
            </div>
        </div>
        <div class="blog-card alt">
            <div class="meta">
                <div class="photo" style="background-image: url(/img/event2.jpg)"></div>
            </div>
            <div class="description">
                <h1>Get Your VIRTUAL Teach On</h1>
                <h2>Tomorrow at 7:30 PM</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="/events">Read More</a>
                </p>
            </div>
        </div>
        </div>
        <div class="events_branch">
        <div class="blog-card">
            <div class="meta">
                <div class="photo" style="background-image: url(/img/event3.jpg)"></div>
            </div>
            <div class="description">
                <h1>Rebel Ideas – a Radical Blueprint for Problem-Solving in a Crisis</h1>
                <h2>Thu, May 7, 8:00 AM</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="/events">Read More</a>
                </p>
            </div>
        </div>
        <div class="blog-card alt">
            <div class="meta">
                <div class="photo" style="background-image: url(/img/event4.jpg)"></div>
            </div>
            <div class="description">
                <h1>Nueva Revista Orsai Nº 6 — Preventa y presentación mundial</h1>
                <h2>Fri, Jun 19, 6:00 PM</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="/events">Read More</a>
                </p>
            </div>
        </div>
        </div>
    </div>
@endsection
