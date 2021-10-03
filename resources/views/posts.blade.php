@extends('layouts.main')

@section('container')
<h1>Halaman Blog</h1>
@foreach ($posts as $post)
<div class="card mb-4" style="width: 18rem;">
    <div class="card-body">
        <h2 class="card-title">
            {{ $post['title'] }}
        </h2>
        <h6 class="card-subtitle mb-2 text-muted">
            By: {{ $post['author'] }}
        </h6>
        <p class="card-text">{{ $post['body'] }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="card-link btn btn-outline-dark">Selengkapnya
        </a>
    </div>
</div>
@endforeach
@endsection