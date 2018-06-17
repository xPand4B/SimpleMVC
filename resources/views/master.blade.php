<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        <h1>MVC Tempalte Project</h1>

        <div class="container">
            @yield('content')
        </div>
        
        @include('partials._javascript')
    </body>
</html>