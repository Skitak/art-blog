@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($articles as $article)
                        <h1> {{ $article->title}} </h1>
                        @if ($article->image != null)
                            <img class="img-fluid" src='{{ asset('storage/' . $article->image) }}' />    
                        @endif
                        <a href="{{ route('articles.edit', $article) }}">EDIT</a>
                        @include('back.utils.delete', ['route' => 'articles.destroy', 'object' => $article])
                        {{-- <a href="{{ route(, $article) }}">DESTROY</a> --}}
                    @endforeach
                    
                    
                </div>
                <a href="{{ route('articles.create') }}">Create article</a>
            </div>
        </div>
    </div>
</div>
@endsection
