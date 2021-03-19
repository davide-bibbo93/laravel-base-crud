@extends('base')

@section('title', 'Index')

@section('content')
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
      @foreach ($beers as $beer)
        <tr>
          <th scope="row">{{$beer->id}}</th>
          <td><a href="{{ route('beers.show', compact('beer')) }}">{{$beer->brand}}</a></td>
          <td>{{$beer->type}}</td>
          <td>{{$beer->alcohol_content}}</td>
          <td>{{$beer->price}}</td>
          <td><img src="{{$beer->cover}}" width="100px" alt=""></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
