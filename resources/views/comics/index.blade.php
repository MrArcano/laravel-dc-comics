@extends('layouts.main')

@section('content')
    <h1>Comics - Index</h1>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data di vendita</th>
                <th scope="col">Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <th>{{ $comic->title }}</th>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <th>{{ $comic->price }}</th>
                    <td>{{ $comic->sale_date }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show',['comic' => $comic->slug])}}" ><i class="fa-solid fa-info"></i></a>
                        <a class="btn btn-primary" href="{{ route('comics.edit',['comic' => $comic->slug]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="bg-secondary">
        {{ $comics->links() }}
    </div>
@endsection
