<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>laravel-base-crud</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div>
            <div class="card" style="width: 14rem;">
                <img class="card-img-top" src="{{$beer->cover}}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$beer->brand}}</h5>
                <p class="card-text">{{$beer->type}}</p>
                <a href="#" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </body>
</html>
