@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-4">
    <main class=" form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>
      <form action="" method="">
        <div class="form-floating">
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" placeholder="Password">
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