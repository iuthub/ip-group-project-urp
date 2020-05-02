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
</head>
<body>
    @include('layout.header')
    @yield('content-body')

    <div class="news">
        <div class="news-page">
                <h3 class="news">News</h3>
            <div class="news_page">
                <div class="news_card">
                    <img src="./img/news1.jpg" class="news_img">
                    <div class="news_par">
                        <h4>Meeting in Conference hall</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum et animi ex. Odit obcaecati eos incidunt repellendus nihil tempore iure doloremque</p>
                    </div>
                </div>
                <div class="news_card">
                    <img src="./img/news2.jpg" class="news_img">
                    <div class="news_par">
                        <h4>Meeting in Conference hall</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum et animi ex. Odit obcaecati eos incidunt repellendus nihil tempore iure doloremque</p>
                    </div>
                </div>
                <div class="news_card">
                    <img src="./img/news3.jpg" class="news_img">
                    <div class="news_par">
                        <h4>Meeting in Conference hall</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum et animi ex. Odit obcaecati eos incidunt repellendus nihil tempore iure doloremque</p>
                    </div>
                </div>
            </div>
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
</body>
</html>
