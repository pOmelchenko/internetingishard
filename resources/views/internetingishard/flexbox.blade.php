<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Some Web Page</title>
    @vite(['resources/css/flexbox.css'])
</head>
<body>
<div class="menu-container">
    <div class="menu">
        <div class="date">Jun 21, 2020</div>
        <div class="signup">Sign Up</div>
        <div class="login">Login</div>
    </div>
</div>
<div class="header-container">
    <div class="header">
        <div class="subscribe">Subscribe &#9662;</div>
        <div class="logo"><img src="{{ Vite::asset('resources/img/awesome-logo.svg') }}" alt="logo"></div>
        <div class="social"><img src="{{ Vite::asset('resources/img/social-icons.svg') }}" alt="social"></div>
    </div>
</div>
<div class="photo-grid-container">
    <div class="photo-grid">
        <div class="photo-grid-item first-item"><img src="{{ Vite::asset('resources/img/one.svg') }}" alt="one"></div>
        <div class="photo-grid-item"><img src="{{ Vite::asset('resources/img/two.svg') }}" alt="two"></div>
        <div class="photo-grid-item"><img src="{{ Vite::asset('resources/img/three.svg') }}" alt="three"></div>
        <div class="photo-grid-item"><img src="{{ Vite::asset('resources/img/four.svg') }}" alt="four"></div>
        <div class="photo-grid-item last-item"><img src="{{ Vite::asset('resources/img/five.svg') }}" alt="five"></div>
    </div>
</div>
<div class="footer">
    <div class="footer-item footer-one"></div>
    <div class="footer-item footer-two"></div>
    <div class="footer-item footer-three"></div>
</div>
</body>
</html>
