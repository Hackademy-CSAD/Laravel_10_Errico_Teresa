<x-layout>

    <h1 class="text-center fw-light pt-3">All songs</h1>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            @foreach ($songs as $song)
                <div class="col-12 col-md-3">
                    <x-card :song="$song" />
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
