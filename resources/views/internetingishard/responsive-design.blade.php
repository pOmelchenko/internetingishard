<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Responsive Design</title>
    @vite(['resources/css/responsive-design.css'])
</head>
<body>
<div class="page">
    <div class="section menu"></div>
    <div class="section header">
        <div class="photo">
            <picture>
                <source media="(min-width: 401px)" srcset="{{ Vite::asset('resources/img/photo-big.jpg') }}">
                <source media="(max-width: 400px)" srcset="{{ Vite::asset('resources/img/photo-tall.jpg') }}">
                <img src="{{ Vite::asset('resources/img/photo-small.jpg') }}" alt="header">
            </picture>
        </div>
    </div>
    <div class="section content">
        <img src="{{ Vite::asset('resources/img/illustration-small.png') }}"
             srcset="{{ Vite::asset('resources/img/illustration-small.png') }} 1x, {{ Vite::asset('resources/img/illustration-big.png') }} 2x"
             alt="content"
             style="max-width: 300px"
        >
    </div>
    <div class="section sign-up"><img src="{{ Vite::asset('resources/img/sign-up.svg') }}" alt="sign-up"></div>
    <div class="section feature-1"><img src="{{ Vite::asset('resources/img/feature.svg') }}" alt="feature"></div>
    <div class="section feature-2"><img src="{{ Vite::asset('resources/img/feature.svg') }}" alt="feature"></div>
    <div class="section feature-3"><img src="{{ Vite::asset('resources/img/feature.svg') }}" alt="feature"></div>
</div>
</body>
</html>
