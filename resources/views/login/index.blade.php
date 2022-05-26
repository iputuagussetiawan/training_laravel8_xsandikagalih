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
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
            
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            </form>
            <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now</a></small>
        </div>
    </div>
   
</main>
@endsection