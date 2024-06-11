<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>SmartStickies Events  - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        @stack('styles') 
        @stack('scripts')
    </head>
    <body>
            
        <!-- Include Header -->
        @include('layouts.header')

        @section('sidebar')
            <!-- This is the master sidebar. -->
        @show
 
        <div >
            @yield('content')
        </div>
        
        <!-- Include Footer -->
        @include('layouts.footer')

    </body>
</html>
 
</html>