@extends('layouts.main')

@section('container')
  
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-register">
        <div class="text-center">
          <i class="bi bi-person-fill fs-1"></i>
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
        <form action="/register" method="POST">
          @csrf
          <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <label for="name" >Name</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
            <label for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
        <div class="mt-3 text-center">
          <small >
            <a href="/login">Have account? Login.</a>
          </small>
        </div>
      </main>
    </div>
  </div>

@endsection