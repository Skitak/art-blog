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

                    @foreach ($galeries as $galery)
                        <h1> {{ $galery->title}} </h1>
                        {{-- @if ($galery->image != null)
                            <img src='{{ asset('storage/' . $galery->image) }}' />    
                        @endif --}}
                        <a href="{{ route('galeries.edit', $galery) }}">EDIT</a>
                        @include('back.utils.delete', ['route' => 'galeries.destroy', 'object' => $galery])
                        {{-- <a href="{{ route(, $galery) }}">DESTROY</a> --}}
                    @endforeach
                    
                    
                </div>
                <a href="{{ route('galeries.create') }}">Create galery</a>
            </div>
        </div>
    </div>
</div>
@endsection
