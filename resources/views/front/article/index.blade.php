@extends('layouts.blog')

@section('content')
    @include('front.article.article', ["article" => $article])
@endsection
