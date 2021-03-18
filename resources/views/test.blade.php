<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>laravel-base-crud</title>
    </head>
    <body>
      <h1>BEER SHOP</h1>

      <h3>Per andare alla lista delle birre clicca <a href="/beers/">qui</a></h3>

      @foreach ($beers as $beer)
        <p>{{$beer->brand}}</p>
      @endforeach
    </body>
</html>
