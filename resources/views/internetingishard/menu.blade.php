<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    @vite(['resources/css/menu.css'])
</head>
<body>
<div class="header">
    <div class="logo"><img src="{{ Vite::asset('resources/img/awesome-logo.svg') }}" alt="logo"></div>
    <ul class="menu">
        <li class="dropdown"><span>Features ▾</span>
            <ul class="features-menu">
                <li><a href="#">Harder</a></li>
                <li><a href="#">Better</a></li>
                <li><a href="#">Faster</a></li>
                <li><a href="#">Stronger</a></li>
            </ul>
        </li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Subscribe</a></li>
        <li><a href="#">About</a></li>
    </ul>
</div>
</body>
</html>