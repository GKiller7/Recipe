@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <div class="row">
            @foreach ($recipes as $recipe)
                <div class="col-md-4 mb-4">
                    <div class="position-relative bg-white rounded-4 border p-2 p-sm-3 h-100">
                        <div class="rounded-4 overflow-hidden" style="height: 200px;">
                            @if($recipe->image)
                                <a href="{{ asset('img/' . $recipe->image) }}" data-fancybox="gallery" data-caption="{{ $recipe->name }}">
                                    <img src="{{ asset('img/' . $recipe->image) }}" alt="{{ $recipe->name }}" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                                </a>
                            @else
                                <img src="{{ asset('img/default-recipe.jpg') }}" alt="{{ $recipe->name }}" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                            @endif
                        </div>
                        <div class="d-flex flex-column position-relative mb-2" style="height:7rem;">
                            <div class="h5 text-primary">
                                {{ $recipe->name }}
                            </div>
                            <div>
                                <a class="h6 link-dark text-decoration-none stretched-link"
                                   href="{{ route('recipes.show', $recipe->id) }}">
                                    {{ $recipe->description }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
