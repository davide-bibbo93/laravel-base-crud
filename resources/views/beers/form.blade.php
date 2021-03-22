@php

    // se la variabile edit è instaziata e piena (ovvero true)
    if(isset($edit) && !empty($edit)) {
        $method = 'PUT';
        $url = route('beers.update', compact('beer'));
    } else {
        // create
        $method = 'POST';
        $url = route('beers.store');
    }

@endphp


<form action="{{ $url }}" method="post">
    @csrf
    {{-- qui si può cambiare il metodo post,
        sopra invece rimane solo get o post --}}
    @method($method)

    <div class="form-group">
        <label for="brand">Brand</label>
        <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand"
        placeholder="Brand" value="{{ isset($beer) ? $beer->brand : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('brand') }}
        </div>
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type"
        placeholder="Type" value="{{ isset($beer) ? $beer->type : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('type') }}
        </div>
    </div>

    <div class="form-group">
        <label for="alcohol_content">Alcohol_content</label>
        <input class="form-control {{ $errors->has('alcohol_content') ? 'is-invalid' : '' }}" type="text" name="alcohol_content"
        placeholder="Alcohol_content" value="{{ isset($beer) ? $beer->alcohol_content : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('alcohol_content') }}
        </div>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price"
        placeholder="Price" value="{{ isset($beer) ? $beer->price : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('price') }}
        </div>
    </div>

    <div class="form-group">
        <label for="cover">Cover</label>
        <input class="form-control {{ $errors->has('cover') ? 'is-invalid' : '' }}" type="text" name="cover"
        placeholder="Cover Url" value="{{ isset($beer) ? $beer->cover : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('cover') }}
        </div>
    </div>

    <input type="submit" value="Submit">

</form>
