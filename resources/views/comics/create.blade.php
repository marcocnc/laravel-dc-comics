@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="pb-3">Crea nuovo prodotto</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>


            </div>

        @endif



        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input
                  type="text"
                  class="form-control @error('thumb') is-invalid @enderror"
                  id="thumb"
                  aria-describedby="emailHelp"
                  name="thumb">

                  @error('thumb')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input
                  type="text"
                  class="form-control @error('title') is-invalid @enderror"
                  id="title"
                  name="title">

                  @error('title')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="description">Descrizione</label>
                <textarea
                  type="textarea"
                  class="form-control @error('description') is-invalid @enderror"
                  id="description"
                  name="description"></textarea>

                  @error('description')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input
                  type="text"
                  class="form-control @error('price') is-invalid @enderror"
                  id="price"
                  name="price">

                  @error('price')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
