<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.js" rel="stylesheet">
    <link href="css/bootstrap.js" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css"> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    
    <script>
    $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy-mm-dd'
    });

    });
    </script>
</head>
<body>
    <div class="container">
        <h3>Dollargames</h3>
        @include('navbar')
        <div>
        @if(session()->get('message') !== null)       
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>           
        @endif
        
        @section('content')
            
        @show
        </div>
    </div> 
            

</body>
</html>    