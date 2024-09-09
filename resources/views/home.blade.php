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
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About Us</a></li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                </li>
            </ul>
        </nav>
        <div class="cta">
            <a href="#" class="cta-button">Get Started</a>
        </div>
    </div>
</header>


<section class="hero">
    <div class="hero-content">
        <h1>Unlock Your Potential with TechLearn</h1>
        <p>Explore a wide range of IT courses designed to advance your skills and boost your career. Learn from industry experts and join a community of learners today.</p>
        <a href="#" class="hero-cta-button">Browse Courses</a>

    </div>
    <img src="{{ asset('img.png') }}" alt="logo" class="hero-image"/>

</section>

<section id="courses" class="courses">
    <h2 class="courses-header">Explore Our Courses</h2>
    <div class="container">
        <div class="course-list">
            @foreach($courses as $course)
                <div class="course-item">
                    <div class="course-head" style="background: {{ $course->color }};"></div>
                    <h3>{{ $course->title }}</h3>
                    <p>{{ $course->description }}</p>
                    <div class="button-container">
                        <a href="#" class="start-course-button">Start Course</a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
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
