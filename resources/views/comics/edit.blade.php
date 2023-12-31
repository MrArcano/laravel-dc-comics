@extends('layouts.main')

@section('content')
    <h1>Edit FORM</h1>
    <form action="{{ route('comics.update', $comic)}}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ $comic->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image url</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artista/i</label>
            <input type="text" class="form-control" id="artists" name="artists" value="{{ $comic->artists }}">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Writer/s</label>
            <input type="text" class="form-control" id="writers" name="writers" value="{{ $comic->writers }}">
        </div>

        <button type="submit" class="btn btn-outline-primary">Invia</button>
        <button type="reset" class="btn btn-outline-danger">Annulla</button>
    </form>
@endsection
