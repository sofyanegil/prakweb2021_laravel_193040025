@extends('layouts.main')

@section('container')
<h1 class="text-center mb-4">Halaman Blog Posts</h1>
<div class="row justify-content-center align-content-lg-between">
    @foreach ($posts as $post)
    <div class="card mb-4 mx-auto" style="width: 18rem;">
        <div class="card-body ">
            <h2 class="card-title">
                {{ $post->title }}
            </h2>
            <h6 class="card-subtitle mb-2 text-muted">
                {{-- By: {{ $post['author'] }} --}}
            </h6>
            <p class="card-text">{!! Str::limit($post->body, 200, '...') !!}</p>
            <a href="/posts/{{ $post->slug }}" class="card-link btn btn-outline-dark">Selengkapnya
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection