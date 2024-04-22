<x-layout>


    <form method="POST" action="{{route('forgot-password')}}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">E-Mail Address:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
        <button type="submit" class="btn btn-primary">Resetta Password</button>
    </form>


</x-layout>



