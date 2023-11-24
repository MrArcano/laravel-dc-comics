<form
  class=" d-inline-block"
  action="{{ route('comics.destroy',['comic' => $comic->slug]) }}"
  method="post"
  onsubmit="return confirm('Sei sicuro di voler elimare questo elemento?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
</form>
