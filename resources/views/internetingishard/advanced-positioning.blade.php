<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>advanced positioning</title>
    @vite(['resources/css/advanced-positioning.css'])
</head>
<body>
<div class="container">
    <div class="example relative">
        <div class="item"><img src="{{ Vite::asset('resources/img/static.svg') }}" alt="static"></div>
        <div class="item item-relative"><img src="{{ Vite::asset('resources/img/relative.svg') }}" alt="relative"></div>
        <div class="item"><img src="{{ Vite::asset('resources/img/static.svg') }}" alt="static"></div>
    </div>
</div>
<div class="container">
    <div class="example absolute">
        <div class="item"><img src="{{ Vite::asset('resources/img/static.svg') }}" alt="static"></div>
        <div class="item item-absolute"><img src="{{ Vite::asset('resources/img/absolute.svg') }}" alt="absolute"></div>
        <div class="item"><img src="{{ Vite::asset('resources/img/static.svg') }}" alt="static"></div>
    </div>
</div>
<div class="container">
    <div class="example fixed">
        <div class="item"><img src="{{ Vite::asset('resources/img/static.svg') }}" alt="static"></div>
        <div class="item item-fixed"><img src="{{ Vite::asset('resources/img/fixed.svg') }}" alt="fixed"></div>
        <div class="item"><img src="{{ Vite::asset('resources/img/static.svg') }}" alt="static"></div>
    </div>
</div>
<script>
    var left = 0;

    function frame() {
        var element = document.querySelector('.item-relative');
        left += 2;
        element.style.left = left + 'px';

        if (left >= 300) {
            clearInterval(id);
        }
    }

    var id = setInterval(frame, 10);
</script>
</body>
</html>
