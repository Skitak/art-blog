@extends('layouts.app')

@section('content')
    <h1>Editer galerie</h1>
    @include('back.galeries.form')
    <div class="container">
        <div class="row">
        @foreach ($galery->posts as $post)
            <div class="col-sm">
                <img class="img-fluid" src="{{asset('storage/' . $post->slug)}}" alt="galery image">
            </div>
        @endforeach
        </div>
    </div>
@endsection
