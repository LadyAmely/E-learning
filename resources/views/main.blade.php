<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platforma e-Learningowa</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#">TechLearn</a>
        </div>
        <nav class="nav">
            <ul>
                <li>
                    <form id="register-form" action="{{ route('register') }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                    <a href="/register" onclick="event.preventDefault(); document.getElementById('register-form').submit();">Register</a>
                </li>
                <li>
                    <form id="login-form" action="{{ route('login') }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                    <a href="/login" onclick="event.preventDefault(); document.getElementById('login-form').submit();">Login</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to TechLearn – Learn, Code, Succeed!</h1>
        <p>IT courses that change careers – join thousands of satisfied students!</p>
        <a href="#" class="hero-cta-button">Get Started</a>

    </div>
    <img src="{{ asset('img.png') }}" alt="logo" class="hero-image"/>

</section>

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
