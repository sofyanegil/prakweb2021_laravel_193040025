@extends('layouts.main')

@section('container')
<h1 class="text-center mb-4">{{ $title }}</h1>

{{-- Serch --}}
<div class="row justify-content-center mb-4">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

{{-- Posts --}}
@if ($posts->count())
<div class="card mx-auto w-auto">

    @if ($posts[0]->image)
    <div class="d-flex justify-content-center" style="max-height: 400px; overflow:hidden;">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="...">
    </div>
    @else
    <img src="https://source.unsplash.com/800x200?{{ $posts[0]->category->name }}" class="img-fluid"
        alt="{{ $posts[0]->category->name }}">
    @endif

    <div class="card-body text-center bg-light">
        <h2 class="card-title">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-dark text-decoration-none">
                {{ $posts[0]->title}}
            </a>
        </h2>
        <p>
            <small class="mb-2 text-muted">
                By:
                <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{$posts[0]->author->name }}
                </a>
                In
                <a class="text-primary text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">
                    {{ $posts[0]->category->name }}
                </a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{!! $posts[0]->excerpt !!}
        </p>
        <a href="/posts/{{ $posts[0]->slug }}" class="card-link btn btn-outline-primary w-20"><i
                class="bi bi-newspaper"></i> Read More
        </a>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a class="text-white text-decoration-none" href="/posts?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </div>

                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                    class="card-img-top">
                @else
                <img src="https://source.unsplash.com/600x300?{{ $post->category->name }}" class="card-img-top"
                    alt="...">
                @endif

                <div class="card-body">
                    <h4 class="card-title">
                        <a href="/posts/{{ $post->slug }}" class="card-link text-decoration-none text-dark">
                            {{ $post->title }}
                        </a>
                    </h4>
                    <p>
                        <small class="mb-2 text-muted">
                            By:
                            <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                                {{Str::limit($post->author->name, 25, '..') }}
                            </a>
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{!! $post->excerpt !!}</p>
                    <a href="/posts/{{ $post->slug }}" class="card-link btn btn-outline-primary w-100"><i
                            class="bi bi-newspaper"></i> Read More
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
{{-- No Post --}}
<div class="alert alert-warning col-sm-6 mx-auto align-items-center h-100 d-flex" role="alert">
    <h1 class="text-center fs-1 flex-fill fs-3 align-self-auto">No Post Found</h1>
</div>
@endif
{{-- Pagination --}}
<div class="pt-5 container d-flex justify-content-center">
    {{ $posts->links() }}
</div>
@endsection