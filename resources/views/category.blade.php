@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>
    <ul class="my-5">
        @foreach ($categories as $category)
            <a class="btn btn-outline-secondary btn-lg mx-5" href="{{ route('categories.show', $category->id) }}" role="button">{{ $category->name }}</a>
        @endforeach
    </ul>
@endsection
