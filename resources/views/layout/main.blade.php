<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('content-title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
@include('layout.header')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            @yield('content-body')
        </div>

        <div class="links">
            <a href="http://localhost:8000/">Main</a>
            <a href="http://localhost:8000/contact">Contact Us</a>
            <a href="http://localhost:8000/about">About Page</a>
            <a href="http://localhost:8000/event/registration">Event Reg</a>
            <a href="http://localhost:8000/events">Events</a>
        </div>
    </div>
</div>

@include('layout.footer')
</body>
</html>

