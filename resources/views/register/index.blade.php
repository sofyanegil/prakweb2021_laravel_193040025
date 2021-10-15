@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <main class=" form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Register Account</h1>
      <form action="" method="">
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Your name">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Your username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password"
            placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
        <small class="d-block text-center mt-2 mb-3">
          Already registered ?<a href="/register">Login</a>
        </small>
      </form>
      <p class="mt-2 mb-3 text-muted text-center">&copy; WPU Blog, 2021</p>
    </main>
  </div>
</div>
@endsection