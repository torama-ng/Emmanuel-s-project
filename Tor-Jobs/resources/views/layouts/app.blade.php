<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('inc.head')
<body>
    @include('inc.navbar') 
   @include('inc.messages')
        <main class="py-4">
            
            @yield('content')
        </main>
    </div>

    @include('inc.footer')
</body>
</html>
