@extends('layouts.app')

@section('content')
    <h1>Supplication Categories</h1>
    <ul>
        @foreach ($categories as $categorie)
            <li>
                <a href="{{ route('category.supplications', ['categorie_id' => $categorie->id]) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
