@extends('base')

@section('title', 'Create')

@section('content')

    <form action="{{route('beers.store')}}" method="post">
        @csrf
        {{-- qui si può cambiare il metodo post,
            sopra invece rimane solo get o post --}}
        @method('POST')

        <div class="form-group">
            <label for="brand">Brand</label>
            <input class="form-control" type="text" name="brand" placeholder="Brand">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input class="form-control" type="text" name="type" placeholder="Type">
        </div>

        <div class="form-group">
            <label for="alcohol_content">Alcohol_content</label>
            <input class="form-control" type="text" name="alcohol_content" placeholder="Alcohol_content">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="cover">Cover</label>
            <input class="form-control" type="text" name="cover" placeholder="Cover Url">
        </div>

        <input type="submit" value="Invia">
    </form>
@endsection
