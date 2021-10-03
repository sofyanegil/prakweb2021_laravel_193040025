@extends('layouts.main')
@section('container')

<h1 class="m-auto">Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="<?= $name ?>" width="200" class="rounded-circle  d-block" />
@endsection