<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <link href="{{ asset('css/home.css') }}" rel="stylesheet"/>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">


    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#">TechLearn</a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
            <div class="cta">
                <a href="#" class="cta-button">Get Started</a>
            </div>
        </div>
    </header>

        <div class="min-h-screen flex flex-col sm:justify-start items-center bg-gray-100 dark:bg-gray-900  sm:pt-0">
            <div>
                <a href="/">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <a href="#">TechLearn</a>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="#" class="social-icon"><img src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Symbol.png" alt="Github"></a>
                <a href="#" class="social-icon"><img src="https://th.bing.com/th/id/R.14f8d0d8ea255a03471032d79087fdf0?rik=Jcph23UZL08iCA&riu=http%3a%2f%2f1000logos.net%2fwp-content%2fuploads%2f2017%2f03%2fColor-of-the-LinkedIn-Logo.jpg&ehk=hT5Ibkg%2fFPa%2f7TPm%2fs2TP8Fxdd7ySQQBuZmn88xh5j0%3d&risl=&pid=ImgRaw&r=0" alt="LinkedIn"></a>
            </div>
        </div>
    </footer>

    </body>
</html>
