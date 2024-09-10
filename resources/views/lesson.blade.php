<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platforma e-Learningowa</title>
    <link rel="stylesheet" href="{{ asset('css/lesson.css') }}">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#">TechLearn</a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/forum">Forum</a></li>
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

<div class="timeline">
    @foreach($lessons as $lesson)
    <div class="lesson-item">
        <div class="circle"></div>
        <div class="lesson-content">
            <h3>Lesson {{ $loop->iteration }}: {{ $lesson->title }}</h3>
            <p>{{$lesson->description}}</p>
            <p class="lesson-date">Created at:  {{ $lesson->created_at->format('d M Y') }}</p>
            <a href="#" class="start-lesson">Start Lesson</a>
        </div>
    </div>
    @endforeach

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
