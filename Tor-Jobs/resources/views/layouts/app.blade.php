<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('inc.head')
<body>
   @include('inc.navbar')
        <main class="py-4">
            
            @yield('content')
        </main>
    </div>

    @include('inc.footer')
</body>
</html>
