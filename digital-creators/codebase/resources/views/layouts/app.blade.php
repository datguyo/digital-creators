<!DOCTYPE html>
<html>
    @include('components.head')

    <body class="min-h-full">

        @include('components.built-using-ycode')

        <div class="contents" id="app">
            @include('components.navigation')

            @yield('content')
        </div>

        @yield('js')

        <script src="{{ mix('js/app.js') }}" async></script>
    </body>
</html>
