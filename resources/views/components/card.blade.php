<div class="card">
    <img src="{{ Storage::url($song->img) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $song->name }}</h5>
        <p class="card-text">{{ $song->year }}</p>
        <a href="{{ route('songs.show', compact('song')) }}" class="btn btn-primary">Dettagli</a>
        <a href="{{ route('songs.edit', compact('song')) }}" class="btn btn-warning">Modifica</a>
        <form method="POST" action="{{ route('songs.destroy', compact('song')) }}">@csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
</div>
