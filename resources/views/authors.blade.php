@extends('layouts.main')

@section('container')
<h1 class="text-center mb-4">Authors</h1>
@foreach ($authors as $user)
<ul class="list-group row-cols-lg-2 ">
  <li class="list-group-item d-flex justify-content-between align-items-center mb-2 mx-lg-auto">
    <h2 class="fw-bold">{{ $user->name }}</h2>
    <a href="/authors/{{ $user->username }}" class="card-link  ">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
        <path
          d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
      </svg>
    </a>
  </li>
</ul>
@endforeach

@endsection