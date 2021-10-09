@extends('layouts.main')

@section('container')
<h1 class="text-center mb-4">Halaman Blog {{ $title }}</h1>

<article class="d-f row mb-5 justify-content-around">
    @foreach ($posts as $post)
    <div class="card mb-4 mt-2 p-3 shadow rounded-3 mx-auto" style="width: 20rem">
        <div class="card-body">
            <a href="/posts/{{ $post->slug }}" class="card-link text-decoration-none text-dark">
                <h2 class="card-title">
                    {{ $post->title }}
                </h2>
            </a>
            <h6 class="card-subtitle mb-2 text-muted">
                By: <a href="/authors/{{ $post->author->username }}"
                    class="text-decoration-none">{{ Str::limit($post->author->name, 15, '...') }}</a>
                <p>In
                    <a class="text-primary text-decoration-none" href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>
            </h6>
            <p class="card-text text-justify">{!! Str::limit($post->body, 200, '...') !!}</p>
            <a href="/posts/{{ $post->slug }}" class="card-link btn btn-outline-primary w-100">Read More
            </a>
        </div>
    </div>
    @endforeach
</article>
@endsection