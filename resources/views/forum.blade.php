<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platforma e-Learningowa</title>
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
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

<div class="forum-container">


    <div class="forum-header">
        <h1>Discussion Forum</h1>
        <p>Ask questions, discuss topics, and collaborate with others.</p>
    </div>


    <div class="forum-topic-list">

        @foreach($questions as $question)
            <div class="forum-topic">
                <h3>{{ $question->title }}</h3>
                <p>{{ $question->content_question }}</p>
                <div class="forum-meta">
                    <span class="forum-author">Author: {{ $question->user ? $question->user->name : 'Unknown' }}</span>
                    <span>Answers: 3</span>
                </div>
                <div class="forum-reply">
                    <form method="POST" action="{{ route('toggleForm', $question->id) }}">
                        @csrf
                        <button type="submit">Reply</button>
                    </form>
                </div>
                @if(session('showForm') == $question->id)
                    <div class="reply-form">
                        <form method="POST" action="{{ route('questions.reply', $question->id) }}">
                            @csrf
                            <textarea name="body" placeholder="Write your answer"></textarea>
                            <button type="submit">Send Reply</button>
                        </form>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <div class="forum-replies">
        @foreach($answers->where('question_id', $question->id) as $answer)
            <div class="forum-reply-item">
                <span class="reply-author">{{ $answer->user->name ?? 'Anonymous' }}</span>
                <p>{{ $answer->body }}</p>
                <div class="reply-meta">
                    <span>Date: {{ $answer->created_at->format('d.m.Y') }}</span>
                    <span><a href="#">Report</a></span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="forum-pagination">
        <a href="#">Previous</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Next</a>
    </div>

    <div class="submit-question">
        <h2>Ask a question</h2>
        <form action="{{ route('submit.question') }}" method="POST" class="question-form">
            @csrf
            <label for="question-title">Question title:</label>
            <input type="text" id="question-title" name="title" placeholder="Enter title..." required>

            <label for="question-body">Question content:</label>
            <textarea id="question-body" name="content_question" rows="5" placeholder="Describe your question..." required></textarea>
            <button type="submit" class="submit-button">Send a question</button>
        </form>
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
