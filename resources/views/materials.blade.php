<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platforma Edukacyjna - Przykładowa Lekcja</title>
    <link rel="stylesheet" href="{{ asset('css/educational_materials.css') }}">
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

<main>

    <div class="container-video">

        <section id="video-section">
            <h2>Video Lesson: Building Apps with React.js and Node.js</h2>
            <video controls>
                <source src="{{asset('video.mp4')}}" type="video/mp4">
                Twoja przeglądarka nie wspiera odtwarzania wideo.
            </video>
        </section>
        <div class="text-section">
            <h3>Introduction to Node.js and React.js</h3>
            <p>Node.js is a runtime environment that allows JavaScript code to run outside of the browser. It is widely used to build server-side applications and command-line tools. With Node.js, you can use the full power of JavaScript on the server side, simplifying the development of web applications.</p>
            <p>React.js is a JavaScript library developed by Facebook that is used to build user interfaces. With React.js, you can create dynamic and responsive web applications. This library allows you to easily manage the state of your application and create reusable components.</p>
        </div>

    </div>



    <section id="pdf-section">
        <h2>Materials to download</h2>
        <ul class="download">
            <li><a href="{{asset('NodeJSNotesForProfessionals.pdf')}}" download>Download Node.js book (PDF)</a></li>
            <li><a href="{{asset('ReactJSNotesForProfessionals.pdf')}}" download>Download React.js book (PDF)</a></li>
        </ul>
    </section>

    <section id="quiz-section">
        <h2>Quiz</h2>
        <form>
            <label>What is JSX in React?</label><br>
            <input type="radio" name="jsx-question" value="a">a) A JavaScript framework for mobile applications<br>
            <input type="radio" name="jsx-question" value="b">b) A JavaScript syntax extension that lets you write HTML in React<br>
            <input type="radio" name="jsx-question" value="c">c) An external CSS library for React components<br>
            <button type="button" onclick="checkAnswer('jsx-question', 'result-jsx', 'b')">Check Answer</button>
        </form>
        <p id="result-jsx"></p>


        <form>
            <label>What is the primary use of useState in React?</label><br>
            <input type="radio" name="usestate-question" value="a">a) To manage the state of a function component<br>
            <input type="radio" name="usestate-question" value="b">b) To create CSS styles in components<br>
            <input type="radio" name="usestate-question" value="c">c) To manipulate the DOM directly<br>
            <button type="button" onclick="checkAnswer('usestate-question', 'result-usestate', 'a')">Check Answer</button>
        </form>
        <p id="result-usestate"></p>


        <form>
            <label>What is a component in React?</label><br>
            <input type="radio" name="component-question" value="a">a) An HTML element used to define styles<br>
            <input type="radio" name="component-question" value="b">b) A standalone, reusable unit of user interface<br>
            <input type="radio" name="component-question" value="c">c) A function for API calls<br>
            <button type="button" onclick="checkAnswer('component-question', 'result-component', 'b')">Check Answer</button>
        </form>
        <p id="result-component"></p>


        <form>
            <label>What is Node.js?</label><br>
            <input type="radio" name="node-question" value="a">a) A framework for creating front-end applications<br>
            <input type="radio" name="node-question" value="b">b) A JavaScript runtime on the server<br>
            <input type="radio" name="node-question" value="c">c) A library for managing databases<br>
            <button type="button" onclick="checkAnswer('node-question', 'result-node', 'b')">Check Answer</button>
        </form>
        <p id="result-node"></p>
    </section>


    <section id="ide-section">
        <h2>Practical exercise in HTML knowledge</h2>
        <div class="ide-container">
            <h3>Interactive IDE</h3>
            <textarea id="code-editor" placeholder="Write your HTML code here..."></textarea>
            <button class="btn" onclick="runCode()">Run the code</button>
            <iframe class="iframe-container" id="output-frame"></iframe>
        </div>
    </section>




    <section id="presentation-section">
        <h2>Presentation: React.js - What You Need to Know</h2>
        <iframe src="{{asset('example_power_point.pdf')}}" width="100%" height="800px"></iframe>
    </section>




    <section id="extra-materials">
        <h2>Extra Materials</h2>
        <ul class="download">
            <li><a href="https://legacy.reactjs.org/docs/getting-started.html">React.js Documentation</a></li>
            <li><a href="https://nodejs.org/docs/latest/api/">Node.js Documentation</a></li>
        </ul>
    </section>
</main>



<script>
    function runCode() {
        var code = document.getElementById("code-editor").value;
        var iframe = document.getElementById("output-frame");
        iframe.src = "data:text/html;charset=utf-8," + encodeURIComponent(code);
    }

    function checkAnswer(questionName, resultId, correctAnswer) {

        const selectedAnswer = document.querySelector(`input[name="${questionName}"]:checked`);

        if (!selectedAnswer) {
            document.getElementById(resultId).textContent = 'Please select an answer.';
            return;
        }


        if (selectedAnswer.value === correctAnswer) {
            document.getElementById(resultId).textContent = 'Correct!';
        } else {
            document.getElementById(resultId).textContent = 'Incorrect.';
        }
    }
</script>




</body>
</html>
