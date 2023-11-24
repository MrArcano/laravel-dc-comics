@extends('layouts.main')

@section('content')
    <h1 class="text-center">Comics - Show</h1>
    <div class="card text-bg-primary my-3">
        <div class="row g-0">
            <div class="col-md-4 bg-white d-flex align-items-center">
                <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">#{{$comic->id}} | {{ $comic->title }} | {{ $comic->sale_date}}</h5>
                        <div>
                            <a class="btn btn-warning" href="{{ route('comics.edit',['comic' => $comic->slug]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        </div>
                    </div>
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
    <span class=" text-bg-primary rounded p-3 d-flex justify-content-end gap-2">
        <a href="{{ route('comics.show', ['comic' => $prev_slug] ) }}" class="btn btn-dark"><</a>
        <a href="{{ route('comics.show', ['comic' => $next_slug ] ) }}" class="btn btn-dark">></a>
    </span>

@endsection
