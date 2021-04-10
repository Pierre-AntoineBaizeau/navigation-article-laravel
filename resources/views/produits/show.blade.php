@extends('layouts.layout')
@section('main')

<a href="{{ route('category.index') }}">Retour à la liste des catégories</a>


<div style="text-align: center">


<ul style="list-style-type: none">
            <li><h1>{{ $produit->nom }}</h1></li>
            <li><img src="{{ $produit->image }}" alt=""></li>
            <li><p>{{ $produit->description }}</p></li>
            <li><p>il reste {{ $produit->stock }} disponible</p></li>
            <li>{{ $produit->prix }} $ </li>
        <br><br>
    </ul>





<ul style="list-style-type: none">
    @foreach($multipleproduits as $produit)
            <li>{{ $produit->nom }}</li>
            <li><img src="{{ $produit->image }}" alt="" style="height: 200px"></li>
            <li>{{ $produit->prix }} $ </li>
            <li><a href="{{ route('produit.show', ['produit' => $produit->id]) }}">Afficher</a> </li>
        <br><br>
        @endforeach
    </ul>


</div>


@endsection
