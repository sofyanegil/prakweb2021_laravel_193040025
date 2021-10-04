@extends('layouts.main')
@section('container')

<h1 class="text-center">Halaman About</h1>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class=" rounded-circle mx-auto  d-block" />
<h3 class="text-center">{{ $name }}</h3>
<p class="text-center">{{ $email }}</p>
@endsection