<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('inc.head')

<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
</body>

<footer class="page-footer bg-dark">
    <div class="footer-copyright text-center py-3">© 2020 Copyright : 
        <a href="https://github.com/elliot-garnero"> GARNERO Elliot</a>
    </div>
</footer>

</html>