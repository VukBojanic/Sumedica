<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LBlog')}}</title>
    </head>
    <body>
    @include('inc.header')

    <div class="container">

    @include('inc.messages')

       @yield('content')

    </div>

    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.js"
    integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
    crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    </body>
</html>