<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- bootstrap -->
    <link href="bootstrap-5.3.2-dist/css/bootstrap.css"  rel="stylesheet">


    @vite('resources/css/app.css')
</head>
<body>
   @yield('content')
   <script src="/bootstrap-5.3.2-dist/js/bootstrap/js"></script>
   <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>