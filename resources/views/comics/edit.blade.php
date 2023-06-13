@extends('layout.main')

@section('content')
    <form action="{{ route('comics.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input
              type="text"
              class="form-control @error('thumb') is-invalid @enderror"
              value="{{old('thumb', $comic->thumb)}}"
              id="thumb"
              name="thumb">

            @error('thumb')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input
              type="text"
              class="form-control @error('title') is-invalid @enderror"
              value="{{old('title', $comic->title)}}"
              id="title"
              name="title">

            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="description">Descrizione</label>
            <textarea
              type="textarea"
              class="form-control @error('description') is-invalid @enderror"
              value="{{old('description', $comic->description)}}"
              id="description"
              name="description"></textarea>

            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input
              type="text"
              class="form-control @error('price') is-invalid @enderror"
              value="{{old('price', $comic->price)}}"
              id="price"
              name="price">

            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
