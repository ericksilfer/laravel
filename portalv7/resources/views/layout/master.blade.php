<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	<title>melhor idade S&A - @section('title', 'Home')</title>

    @section('styles_scripts')
    {!! Html::style('midia/bootstrap/dist/css/bootstrap.min.css') !!}
    @show

  </head>
  <body>

    @yield('content')


    @section('scripts')
    	{!! HTML::script('midia/jquery/dist/jquery.min.js') !!}
    	{!! HTML::script('midia/bootstrap/dist/js/bootstrap.min.js') !!}
    @show

  </body>
</html>

