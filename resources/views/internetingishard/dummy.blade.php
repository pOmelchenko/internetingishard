<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'/>
    @vite(['resources/css/styles.css'])
    <title>Dummy</title>
</head>
<body>
<h1>Dummy</h1>

<p>This is a dummy page that helps us demonstrate reusable CSS
    stylesheets. <a href='{{ route('internetingishard.home') }}'>Go back</a>.</p>

<p>Want to try crossing out an <a href='nowhere.html' style='color: #990000; text-decoration: line-through;'>obsolete link</a>? This
    is your chance!</p>
</body>
</html>
