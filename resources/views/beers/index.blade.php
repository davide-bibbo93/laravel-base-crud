<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>laravel-base-crud</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Brand</th>
          <th scope="col">Type</th>
          <th scope="col">Alcohol_content</th>
          <th scope="col">Price</th>
          <th scope="col">Cover</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($beers as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td><a href="/beers/{{$item->id}}">{{$item->brand}}</a></td>
            <td>{{$item->type}}</td>
            <td>{{$item->alcohol_content}}</td>
            <td>{{$item->price}}</td>
            <td><img src="{{$item->cover}}" width="100px" alt=""></td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
