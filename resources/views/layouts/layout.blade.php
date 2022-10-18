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
    <script>
        function toggleMenu(e) {
            let el;

            if (e === 'UserMenu') {
                el = document.getElementById(e);
                if (el.classList.contains('hidden')) {
                    el.classList.add("block");
                    el.classList.remove("hidden");
                } else {
                    el.classList.add("hidden");
                    el.classList.remove("block");
                }
            } else {
                el = document.getElementById(`CardX${e}`);
                if (el.classList.contains('hidden')) {
                    el.classList.add("block");
                    el.classList.remove("hidden");
                } else {
                    el.classList.add("hidden");
                    el.classList.remove("block");
                }
            };
        }
    </script>
</head>

<body>
    @include('partials.header')

    <div class="flex justify-center justify-center h-full">
        <div class="max-w-full h-full mx-5 md:mx-0">
            <div class="grid grid-cols-1 mt-10 md:grid-cols-2">
                <div>
                    @include('partials.card-list')
                    @include('partials.pagination')
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>

</html>
