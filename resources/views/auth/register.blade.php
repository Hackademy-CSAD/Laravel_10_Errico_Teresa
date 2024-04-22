<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-3">
                <h1>Registrati</h1>
            </div>
            <div class="col-6">
                {{-- FORM DI REGISTRAZIONE --}}
                <form method="POST" action="{{route('register')}}">@csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail Address:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password confirmation:</label>
                        <input type="password_confirmation" class="form-control" id="password_confirmation"
                            name="password_confirmation" value="{{old('password_confirmation')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Sing up</button>
                </form>
            </div>
        </div>


</x-layout>
