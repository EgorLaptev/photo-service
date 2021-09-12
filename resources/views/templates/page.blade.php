<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ url('public/assets/img/logo.png')  }}" type="image/png">
    @yield('links')
    <title>@yield('title', 'Photos')</title>
</head>
<body>

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    @yield('scripts')
    <script src="https://kit.fontawesome.com/19ce154370.js" crossorigin="anonymous"></script>
    <script src='{{ url('public/assets/js/upload.js') }}'></script>

</body>
</html>
