<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')

    @include('partials._head')



    
     
</head>
@yield('body')
<body>
 @include('layouts.navbar')
    <div id="app">
       
        @include('partials._messages')


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
   

   @stack('js')
   @include('layouts.footer')
</body>
</html>
