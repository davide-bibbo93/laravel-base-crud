@extends('base')

@section('title', 'Create')

@section('content')

    {{-- in caso se la validazione fallisse --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form class="needs-validation" action="{{route('beers.store')}}" method="post" novalidate>
        @csrf
        {{-- qui si può cambiare il metodo post,
            sopra invece rimane solo get o post --}}
        @method('POST')

        <div class="form-group">
            <label for="brand">Brand</label>
            <input class="form-control" type="text" name="brand" placeholder="Brand" required>
            <div class="invalid-feedback">
                Enter the brand name.
            </div>
            <div class="valid-feedback">
                Great.
            </div>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input class="form-control" type="text" name="type" placeholder="Type" required>
            <div class="invalid-feedback">
                Enter the type.
            </div>
            <div class="valid-feedback">
                Great.
            </div>
        </div>

        <div class="form-group">
            <label for="alcohol_content">Alcohol_content</label>
            <input class="form-control" type="text" name="alcohol_content" placeholder="Alcohol_content" required>
            <div class="invalid-feedback">
                Enter the alcohol content.
            </div>
            <div class="valid-feedback">
                Great.
            </div>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price" placeholder="Price" required>
            <div class="invalid-feedback">
                Enter the price.
            </div>
            <div class="valid-feedback">
                Great.
            </div>
        </div>

        <div class="form-group">
            <label for="cover">Cover</label>
            <input class="form-control" type="text" name="cover" placeholder="Cover Url" required>
            <div class="invalid-feedback">
                Enter the url of the image.
            </div>
            <div class="valid-feedback">
                Great.
            </div>
        </div>

        <input type="submit" value="Submit">

    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>

@endsection
