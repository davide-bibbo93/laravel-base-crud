@extends('base')

@section('title', 'Edit')

@section('content')

    {{--

       - METHOD [post|put]
       - endpoint della form
       - value input

        --}}

    @include('beers.form', ['edit' => true])

@endsection
