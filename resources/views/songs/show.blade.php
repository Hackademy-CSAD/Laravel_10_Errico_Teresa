<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-3">
                <h1 class="text-center">{{ $song->name }}</h1>
                <h1 class="text-center">{{ $song->year }}</h1>
            </div>
            <div class="col-6">
                <img src="{{ Storage::url($song->img) }}" alt="" class="h-100 w-100 object-fit-cover">
            </div>
        </div>
    </div>






</x-layout>
