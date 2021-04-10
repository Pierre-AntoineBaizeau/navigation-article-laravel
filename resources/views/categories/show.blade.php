@extends('layouts.layout')
@section('main')

<div style="text-align: center">

<h1>{{ $category->nom }}</h1>
<img src="{{ $category->img }}" alt=""><br>
<a style="font-size: 20px" href="{{ route('category.index') }}">Retour à la liste des catégories</a>
<br><br><br>

<ul style="list-style-type: none">
@foreach($produits as $produit)
        <li>{{ $produit->nom }}</li>
        <li><img src="{{ $produit->image }}" alt=""></li>
        <li>{{ $produit->prix }} $ </li>
        <li><a href="{{ route('produit.show', ['produit' => $produit->id]) }}">Afficher</a> </li>
    <br><br>
    @endforeach
</ul>
</div>

@endsection
