<!-- resources/views/layouts/master.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/icons/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico') }}" type="image/x-icon"/>
    <link rel="manifest" href="{{ asset('manifest.json') }}"/>
    <link rel="manifest" href="{{ asset('mix-manifest.json') }}"/>
    <title>Honkai 3rd Wiki</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Chat App">
    <meta name="msapplication-TileImage" content="link to the image in static folder">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link rel="apple-touch-icon" href="link to the smaller icon">
</head>
<body>
<div id="app">
    <App></App>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
