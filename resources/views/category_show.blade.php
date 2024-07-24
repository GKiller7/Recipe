@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ $category->name }}</h1>
        <div class="row">
            @foreach ($recipes as $recipe)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-img-top overflow-hidden" style="height: 200px;">
                            @if($recipe->image)
                                <a href="{{ asset('img/' . $recipe->image) }}" data-fancybox="gallery" data-caption="{{ $recipe->name }}">
                                    <img src="{{ asset('img/' . $recipe->image) }}" alt="{{ $recipe->name }}" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                                </a>
                            @else
                                <img src="{{ asset('img/default-recipe.jpg') }}" alt="{{ $recipe->name }}" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                            @endif
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-primary">{{ $recipe->name }}</h5>
                            <p class="card-text text-truncate">{{ $recipe->description }}</p>
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-outline-primary mt-auto">View Recipe</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
