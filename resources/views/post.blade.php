@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5 px-5">
    {{-- breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb fs-6">
            <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
            <li class="breadcrumb-item"><a href="/categories/">Categories</a>
            </li>
            <li class="breadcrumb-item"><a href="/categories/{{ $post->category->slug }}">{{
                    $post->category->name
                    }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($post->slug, 10, '...') }}</li>
        </ol>
    </nav>
    {{-- akhir breadcumb --}}
    <div class="col-md-8">
        {{-- Content --}}
        <h1 class="text-center">{{ $post->title }}</h1>
        <p>
            <small class="mb-2 text-muted">
                By:
                <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}
                </a>
                In
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>

                {{ $post->created_at->diffForHumans() }}
            </small>
        </p>
        <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid mx-auto" alt="...">

        <article class="my-3 fs-5" style="text-align:justify">
            {!! $post->body !!}
        </article>

        {{-- Akhir Content --}}
        <a href="/blog" class="btn btn-primary mt-5 ml-auto mb-5 w-100">Back to Posts</a>
    </div>
</div>





@endsection