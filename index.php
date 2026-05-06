<?php

echo "Welcome to my PHP Portfolio Website";

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <style>
        html{
    scroll-behavior:smooth;
}

body{
    margin:0;
    font-family: Arial;
    background-color:#f4f4f4;
}

.hero{
    background: linear-gradient(to right, #4facfe, #00f2fe);
    color:white;
    text-align:center;
    padding:80px 20px;
}

.hero img{
    border-radius:50%;
}

.hero h1{
    font-size:50px;
}

.hero p{
    font-size:25px;
}

button{
    background:white;
    color:black;
    border:none;
    padding:15px 30px;
    border-radius:10px;
    font-size:18px;
    cursor:pointer;
}
.skills{
    padding:50px;
    text-align:center;
}

.skills h2{
    font-size:40px;
}

.skills ul{
    list-style:none;
    padding:0;
}

.skills li{
    background:white;
    margin:10px auto;
    width:200px;
    padding:15px;
    border-radius:10px;
    box-shadow:0px 0px 10px gray;
}
.skills li:hover{
    transform: scale(1.05);
    transition: 0.3s;
}
.projects{
    text-align:center;
    padding:50px;
}

.project-card{
    background:white;
    width:300px;
    margin:20px auto;
    padding:20px;
    border-radius:15px;
    box-shadow:0px 0px 10px gray;
}
@media(max-width:600px){

    .hero h1{
        font-size:35px;
    }

    .hero p{
        font-size:18px;
    }

    .project-card{
        width:90%;
    }
    nav{
    flex-direction:column;
}

nav ul{
    flex-direction:column;
    padding:0;
}

}
.contact{
    background:#222;
    color:white;
    text-align:center;
    padding:40px;
}
nav{
    background:#111;
    color:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
}

nav ul{
    display:flex;
    list-style:none;
    gap:20px;
}

nav a{
    color:white;
    text-decoration:none;
}

.logo{
    font-size:30px;
}
nav a:hover{
    color:yellow;
    transition:0.3s;
}
.form-section{
    text-align:center;
    padding:50px;
}

.form-section input,
.form-section textarea{
    width:300px;
    padding:12px;
    border-radius:8px;
}
.table-section{
    text-align:center;
    padding:50px;
}

table{
    background:white;
    border-collapse:collapse;
}
.video-section{
    text-align:center;
    padding:50px;
}
footer{
    background:black;
    color:white;
    text-align:center;
    padding:20px;
}
</style>

</head>

<body>

        <nav>

    <h2 class="logo">Portfolio</h2>

    <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
</ul>

</nav>

    <div class="hero">

        <img src="https://i.imgur.com/QCNbOAo.png" width="150">

        <h1>Naiyara Girnari</h1>

        <p id="typing"></p>

        <button onclick="showMessage()">Contact Me</button>
        <br><br>

<a href="#">
    <button>Download Resume</button>
</a>

    </div>

    <div class="skills" id="skills">

        <h2>My Skills</h2>

        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
        </ul>

    </div>
<div class="projects" id="projects">

    <h2>My Projects</h2>

    <div class="project-card">
        <h3>Portfolio Website</h3>
        <p>A personal portfolio made using HTML, CSS and JavaScript.</p>
    </div>

    <div class="project-card">
        <h3>Login Form UI</h3>
        <p>A responsive login page design project.</p>
    </div>

</div>
<div class="video-section">

    <h2>Introduction Video</h2>

    <video width="400" controls>
        <source src="sample.mp4" type="video/mp4">
    </video>

</div>
<div class="table-section">

    <h2>Education</h2>

    <table border="1" align="center" cellpadding="10">

        <tr>
            <th>Year</th>
            <th>Course</th>
            <th>Institute</th>
        </tr>

        <tr>
            <td>2026</td>
            <td>BSC IT</td>
            <td>KISHINCHAND CHELLARAM COLLEGE</td>
        </tr>

    </table>

</div>
<div class="form-section">

    <h2>Contact Form</h2>

    <form>

        <input type="text" placeholder="Enter Name" required>

        <br><br>

        <input type="email" placeholder="Enter Email" required>

        <br><br>

        <textarea placeholder="Your Message"></textarea>

        <br><br>

        <button type="submit">Send</button>

    </form>
<div class="contact" id="contact">

    <h2>Contact Me</h2>

    <p>Email: naiyaragirnari@gmail.com</p>

    <p>Phone: +91 8828242175</p>

</div>

<script>
function showMessage() {
    alert("Thank you for visiting my portfolio!");
}

let text = "Full Stack Web Development Intern";
let index = 0;

function typeEffect(){

    if(index < text.length){

        document.getElementById("typing").innerHTML += text.charAt(index);

        index++;

        setTimeout(typeEffect,100);
    }
}

typeEffect();

</script>
<footer>

    <p>© 2026 Naiyara Girnari Portfolio</p>

</footer>
</body>

</html>