@extends('layout.main')

@section('content')
    <table class="table">
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
                    <td><a href="" class="btn btn-primary">Vai</a></td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
