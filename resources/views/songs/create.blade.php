<x-layout>

    <header>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </header>

    <h2 class="text-center fst-light">Compila questo form</h2>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                {{-- FORM --}}
                <form method="POST" action="{{ route('songs.store') }}"enctype="multipart/form-data">@csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome canzone:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror()
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno:</label>
                        <input type="number" class="form-control" id="year" name="year"
                            value="{{ old('year') }}">
                        @error('year')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror()
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Copertina album:</label>
                        <input type="file" class="form-control" id="img" name="img">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror()
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>




</x-layout>
