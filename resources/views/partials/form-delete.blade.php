<form action="{{ route('comics.destroy',['comic' => $comic->slug]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
</form>
