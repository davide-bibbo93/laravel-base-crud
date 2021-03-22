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
            <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand" placeholder="Brand">
            <div class="invalid-feedback">
                {{ $errors->first('brand') }}
            </div>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" placeholder="Type">
            <div class="invalid-feedback">
                {{ $errors->first('type') }}
            </div>
        </div>

        <div class="form-group">
            <label for="alcohol_content">Alcohol_content</label>
            <input class="form-control {{ $errors->has('alcohol_content') ? 'is-invalid' : '' }}" type="text" name="alcohol_content" placeholder="Alcohol_content">
            <div class="invalid-feedback">
                {{ $errors->first('alcohol_content') }}
            </div>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" placeholder="Price">
            <div class="invalid-feedback">
                {{ $errors->first('price') }}
            </div>
        </div>

        <div class="form-group">
            <label for="cover">Cover</label>
            <input class="form-control {{ $errors->has('cover') ? 'is-invalid' : '' }}" type="text" name="cover" placeholder="Cover Url">
            <div class="invalid-feedback">
                {{ $errors->first('cover') }}
            </div>
        </div>

        <input type="submit" value="Submit">

    </form>

@endsection
