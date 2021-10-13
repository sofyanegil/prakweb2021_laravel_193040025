@extends('layouts.main')
@section('container')

<h1 class="text-center">Halaman About</h1>

<div class="card mx-auto border-secondary" style="width: 18rem;">
  <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class=" rounded-circle mx-auto  d-block card-img-top" />
  <div class="card-body bg-light">
    <h5 class="card-title">{{ $name }}</h5>
    <p class="card-text">{{ $email }}
    </p>
    <a href="https://instagram.com/sofyanegi" class="btn  w-100 btn-outline-dark" target="_blank">Reach
      Me</a>
  </div>
</div>
@endsection