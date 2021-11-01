@extends('layouts.main')

@section('container')
  
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-signin">
        
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if (session()->has('loginFailed'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginFailed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="text-center">
          <i class="bi bi-person-fill fs-1"></i>
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        <form action="/login" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required autofocus>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}  
              </div>   
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}  
              </div>   
            @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <div class="mt-3 text-center">
          <small >
            <a href="/register">Don't have account?</a>
          </small>
        </div>
      </main>
    </div>
  </div>

@endsection