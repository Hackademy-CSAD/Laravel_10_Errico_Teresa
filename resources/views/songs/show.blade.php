<x-layout>

    <div class="container-fluids">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">{{ $song->name }}</h1>
                <h1 class="text-center">{{ $song->year }}</h1>
            </div>
            <div class="col-6">
                <img src="{{ Storage::url($song->img) }}" alt="">
            </div>
        </div>
    </div>






</x-layout>
