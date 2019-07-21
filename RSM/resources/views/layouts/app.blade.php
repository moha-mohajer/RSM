<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/customcss.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body >
      @include('inc.navbar')
      <div class="container">
        {{-- includ the messagess --}}
        @include('inc.messages')
        @yield('content') 
      </div>
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'article-ckeditor' );
      </script>
    </body>
</html>
