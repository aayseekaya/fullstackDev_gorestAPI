<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel React</title>
</head>
<body>
    <div id="hello-react" data="dfjkfkfk"></div>
    <div id="counter"></div>

    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>GeeksforGeeks</title>
</head>
<body>
    <h1>My Article</h1>
    <ul>
        @foreach ($response as $article)
            <li>{{ $article["name"]}}</li>
        @endforeach
    </ul>
</body>
</html> -->