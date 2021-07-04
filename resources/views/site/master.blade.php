<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('site.head')
    </head>
<body>
    <header>
        @include('site.nav')
    </header>
    <main>
        @section('content')
        @show
    </main>
    
        @include('site.footer')
    
</body>
</html> 

