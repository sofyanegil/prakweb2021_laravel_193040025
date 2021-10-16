@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-4">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('loginError') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class=" form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>
      <form action="/login" method="POST">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
            placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <small class="d-block text-center mt-2 mb-3">
          Not Register? <a href="/register">Register Now!</a>
        </small>
      </form>
      <p class="mt-2 mb-3 text-muted text-center">&copy; WPU Blog, 2021</p>
    </main>
  </div>
</div>
@endsection