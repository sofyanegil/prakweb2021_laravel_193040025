@extends('layouts.main')

@section('container')
<h1 class="text-center mb-5">Halaman About</h1>

<div class="row justify-content-center">
  @foreach ($users->only(1) as $user)
  <div class="col-md-3 mb-3">
    <div class="card mx-auto border-secondary" style="width: 18rem;">
      <img src="https://source.unsplash.com/200x200?Joker" alt="" width="100" class="mx-auto  d-block card-img-top" />
      <div class="card-body bg-light">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text">{{ $user->email }}
        </p>
        <a href="https://instagram.com/{{ $user->username }}" class="btn  w-100 btn-outline-dark" target="_blank">Reach
          Me</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection