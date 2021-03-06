<style>
  .carousel img {
    object-fit: cover;
    object-position: center;
  }

  body {
    overflow-y: hidden
  }
</style>
@extends('layouts.main')

{{-- @section('container')
<h1 class="mt-4 text-center">Halaman Home</h1>
@endsection --}}

<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://source.unsplash.com/random/1200x600?Code" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Code</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://source.unsplash.com/random/1200x600?Playstation" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Play</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random/1200x600?Baseball" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Baseball</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>