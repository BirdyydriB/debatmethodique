<!DOCTYPE html>
<html>   
<head>
    <meta charset="UTF-8">
    
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{-- HTML::style('/css/??.css') --}}
   
    {{ HTML::script('/js/jquery-1.11.0.min.js') }}
    {{ HTML::script('/js/bootstrap.min.js') }}
    {{-- HTML::script('/js/??.js') --}}
</head>
<body>
    
    @include('menu')
    
    <div id="mainContainer" class="container">
        @yield('content')
    </div>
</body>
</html>