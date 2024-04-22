<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-3">
                <h1>Registrati</h1>
            </div>
            <div class="col-6">
                {{-- FORM DI REGISTRAZIONE --}}
                <form method="POST" action="{{route('login')}}">@csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail Address:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" alue="{{old('password')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    {{-- <a href="{{route('forgot-password')}}"><button>Password dimenticata?</button></a> --}}
                </form>
            </div>
        </div>


</x-layout>
