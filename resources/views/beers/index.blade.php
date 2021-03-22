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
        <th scope="col">Action</th>
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
          <td>
            <a href="{{ route('beers.show', compact('beer')) }}">
                <button type="submit" class="btn btn-primary">
                    <i class="far fa-eye"></i>
                </button>
            </a>
            <a href="{{ route('beers.edit', compact('beer')) }}">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-edit"></i>
                </button>
            </a>
            <form action="{{ route('beers.destroy', compact('beer')) }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                </button>



            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
