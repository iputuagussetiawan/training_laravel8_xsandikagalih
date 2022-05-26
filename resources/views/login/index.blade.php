@extends('layouts.main')
@section('container')
<main class="form-signin">
    <div class="row justify-content-center">
        <div class="col-md-5">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success'); }}
              </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                {{ session('loginError'); }}
              </div>
            @endif
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com"  autofocus value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }} placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </form>
            <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now</a></small>
        </div>
    </div>
   
</main>
@endsection