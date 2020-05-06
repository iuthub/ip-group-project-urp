<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('content-title')</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>
<body>
    @include('layout.header')
    @yield('content-body')
<div class="main">
    

    <div class="popular">
        <div class="popular-page">
                <h3 class="popular">Popular Events</h3>
            <div class="popular_page">
                <div class="popular_card"><a href="/events">
                    <img src="./img/news1.jpg" class="popular_img">
                    <div class="popular_par">                
                        <h4>Meeting in Conference hall</h4></a>
                        <b>Tomorrow at 7:30 PM</b>
                    </div>
                    
                </div>
                <div class="popular_card"><a href="/events">
                    <img src="./img/news2.jpg" class="popular_img">
                    <div class="popular_par">
                        <h4>Meeting in Conference hall</h4></a>
                        <b>Thu, May 7, 8:00 AM</b>
                    </div>
                    
                </div>
                <div class="popular_card"><a href="/events">
                    <img src="./img/news3.jpg" class="popular_img">
                    <div class="popular_par">
                        <h4>Meeting in Conference hall</h4></a>
                        <b>Fri, Jun 19, 6:00 PM</b>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="event_btn">
                        <a href="/events">See more Events</a>
                    </div>
    </div>
    <div class="our_platform">
        <div class="img_platform">
            <img src="img/Group 1.png" alt="">
        </div>
        <div class="text_platform">
            <h3>Our Platform</h3>
            <p>Collaborative Security Workspace Community Powered Solutions Native Workflow Automation Connected Analytics</p>
            <a href="#">Find your course </a>
        </div>
    </div>

    @include('layout.footer')
</div>
</body>
</html>
