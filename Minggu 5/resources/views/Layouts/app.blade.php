<!DOCTYPE html>
<html lang="{[ str_replace('_','_', app()->getlocale())]}">
<head>
    <meta charset="Utf-8">
    <meta name="viewport" contect=width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>