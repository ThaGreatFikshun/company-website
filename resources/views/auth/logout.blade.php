@extends('app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<main class="logout-confirmation">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Logout</h3>
                    <div class="card-body">
                        <p class="text-center">Are you sure you want to log out?</p>

                        <div class="d-grid mx-auto">
                            <form action="{{ route('signout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-dark btn-block">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
