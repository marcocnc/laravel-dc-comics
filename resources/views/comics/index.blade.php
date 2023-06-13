@extends('layout.main')

@section('content')
    <h1 class="pb-3 mt-5">Lista fumetti</h1>
    <table class="table border">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Dettagli</th>
                <th scope="col">Opzioni</th>
                <th scope="col">Modifica</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comicsList as $comic)
                <tr>
                    <td>{{ $comic['id'] }}</td>
                    <td>{{ $comic['title'] }}</td>
                    <td>{{ $comic['series'] }}</td>
                    <td>{{ $comic['type'] }}</td>
                    <td>{{ $comic['price'] }}</td>
                    <td><a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Vai</a></td>

                    <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-dark">Modifica</a></td>

                    <td>
                        <form action="{{route('comics.destroy', $comic)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare {{$comic->title}}?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" title="delete" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
