<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            @include('header')
        </header>
        <div class="row">
            <aside class="col-2 p-0 mt-1">
                @include('v_left')
            </aside>
            <div class="col-10 ps-5 pe-5">
                @yield('main')
                
            </div>
        </div>
        <hr>
        <footer class="row text-center">
            @include('footer')
        </footer>
    </div>
</body>
</html>