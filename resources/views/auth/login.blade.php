@extends('app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" placeholder="Email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
