<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>CSS Selectors</title>
    @vite(['resources/css/styles.css', 'resources/css/css-selectors.css'])
</head>
<body>
<div class="page">
    <h1>CSS Selectors</h1>

    <p>CSS selectors let you <em>select</em> individual HTML elements in an HTML
        document. This is <strong>super</strong> useful.</p>

    <p>Classes are ridiculously important, since they allow you to select
        arbitrary boxes in your web pages.</p>

    <p>We’ll also be talking about links in this example, so here’s
        <a href="https://internetingishard.com">Interneting Is Hard</a> for us to
        style.</p>

    <a href="#" id="button-2" class="button">Button One</a>
    <a href="#" class="button call-to-action">Button Two</a>
</div>
<div class="sidebar">
    <p>If this page had a sidebar...</p>
    <p>We’d have some problems with pseudo-classes.</p>
</div>
</body>
</html>
