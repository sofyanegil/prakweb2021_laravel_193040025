@extends('layouts.main')

@section('container')
<h1 class="text-center mb-4">{{ $title }}</h1>

@if ($posts->count())
<div class="card mx-auto w-auto" style="width: 70vw">
    <img src="https://source.unsplash.com/800x600?{{ $posts[0]->category->name }}" class="card-img-top" alt="..."
        style="height: 50vh;object-fit:cover; object-position:center">
    <div class="card-body text-center bg-light">
        <h2 class="card-title">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-dark text-decoration-none">
                {{ $posts[0]->title}}
            </a>
        </h2>
        <p>
            <small class="mb-2 text-muted">
                By:
                <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{Str::limit($posts[0]->author->name, 15, '...') }}
                </a>
                In
                <a class="text-primary text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">
                    {{ $posts[0]->category->name }}
                </a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{!! Str::limit($posts[0]->body, 200, '...') !!}
        </p>
        <a href="/posts/{{ $posts[0]->slug }}" class="card-link btn btn-outline-primary w-20">Read More
        </a>
    </div>
</div>
@else
<div class="alert alert-warning col-6 mx-auto d-flex align-items-center " role="alert">
    <h1 class="text-center fs-1 flex-fill p-4 fs-3">No Post Found</h1>
</div>
@endif

<div class="container mt-3">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a class="text-white text-decoration-none" href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </div>
                <img src="https://source.unsplash.com/400x300?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="/posts/{{ $post->slug }}" class="card-link text-decoration-none text-dark">
                            {{ $post->title }}
                        </a>
                    </h4>
                    <p>
                        <small class="mb-2 text-muted">
                            By:
                            <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                                {{Str::limit($post->author->name, 15, '...') }}
                            </a>
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{!! Str::limit($post->body, 200, '...') !!}</p>
                    <a href="/posts/{{ $post->slug }}" class="card-link btn btn-outline-primary w-100">Read More
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection