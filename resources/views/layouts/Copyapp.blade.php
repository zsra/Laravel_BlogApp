<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Blog')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/bootstrap.min.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('css/envrimoment.css')}}" >

    </head>
    <body>
      
      @include('inc.navbar')

      <div class="container">
        @include('inc.messages')
        @yield('content')
      </div>

      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'article-ckeditor' );
      </script>
    </body>
</html>
