<!DOCTYPE html>
<html>
    @include('components.head')

    <body class="bg-[#134e4a] bg-opacity-100 md:min-h-[100%] min-h-[100%]">
        @include('components.built-using-ycode')

        <div class="contents" id="app">
            @yield('content')
        </div>
    </body>
</html>
