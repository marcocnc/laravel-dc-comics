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

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
