@extends('layouts.layout')
@section('main')


<h1>Catégories</h1>

<ul style="text-align: center; list-style-type: none">
    @foreach($categories as $category)
        <li>
            <h2>{{ $category->nom }}</h2>
                <li><img src="{{ $category->img }}" alt=""></li>
                <li><a href="{{ route('category.show', ['category' => $category->id]) }}">Afficher</a></li>

        </li>
    @endforeach


</ul>
@endsection

