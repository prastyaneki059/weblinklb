<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/images.png" type="image/x-icon">
    <title>INFORMATION TECHNOLOGY</title>
    @stack('css')
</head>
<body>
    
    @include('layout.app.header')
    @yield('container')
    @include('layout.app.footer')

    @stack('js')
</body>
</html>