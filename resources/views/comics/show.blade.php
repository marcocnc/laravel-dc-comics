@extends('layout.main')

@section('content')

    <div class="container my-5">
        <h1 class="text-center bg-black text-white mb-5">{{$comic->title }}</h1>
        <div class="product d-flex">
            <div class="product-img">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="product-text ms-3">
                <p>{{$comic->description}}</p>
                <a href="{{route('comics.index')}}" class="btn btn-primary">Torna ai fumetti</a>
            </div>
        </div>
    </div>

@endsection
