<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('scripts')
</head>

<body>
    @include('partials.header')

    <div class="flex justify-center justify-center h-full">
        <div class="max-w-full h-full mx-5 md:mx-0">
            <div class="grid grid-cols-2 mt-10">
                @yield('content')
                @include('partials.card-list')
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>

</html>
