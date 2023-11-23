@extends('layouts.main')

@section('content')
    <h1 class="text-center">Comics - Show</h1>
    <div class="card text-bg-primary my-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title}}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{ $comic->title }} | {{ $comic->sale_date}}</h5>
            <p class="card-text">
                {!!$comic->description!!}
            </p>
            <div class="d-flex gap-5">
                <div>
                    <h5>Artisti</h5>
                    <ul>
                        @foreach (explode(",",$comic->artists) as $artist)
                            <li>{{ $artist }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h5>Writer</h5>
                    <ul>
                        @foreach (explode(",",$comic->writers) as $writer)
                            <li>{{ $writer }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <h1 class="text-end">Prezzo: {{ $comic->price }}</h1>

            </div>
        </div>
        </div>
    </div>

@endsection
