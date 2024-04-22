<div class="card">
    <img src="{{ Storage::url($song->img) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $song->name }}</h5>
        <p class="card-text">{{ $song->year }}</p>
        <a href="{{ route('songs.show', compact('song')) }}" class="btn btn-outline-primary">Dettagli</a>
        <a href="{{ route('songs.edit', compact('song')) }}" class="btn btn-outline-warning me-5">Modifica</a>
        <form method="POST" action="{{ route('songs.destroy', compact('song')) }}">@csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger mt-2">Elimina</button>
        </form>
        @if ($song->category)
            <a href="{{ route('category.songs', ["category=>$song->category_id"]) }}">{{ $song->category->name }}</a>
        @else
            <p>No category</p>
        @endif
    </div>
</div>
