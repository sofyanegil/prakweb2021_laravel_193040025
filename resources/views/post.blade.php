@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-5 px-2 ">
    {{-- breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        class="col-md-6" aria-label="breadcrumb">
        <ol class="breadcrumb fs-6">
            <li class="breadcrumb-item">
                <a href="/posts">Blog</a>
            </li>
            </li>
            <li class="breadcrumb-item">
                <a href="/posts?category={{ $post->category->slug }}">
                    {{ $post->category->name}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ Str::limit($post->slug, 10, '...') }}
            </li>
        </ol>
    </nav>
    {{-- akhir breadcumb --}}
    <div class="col-md-8">
        {{-- Content --}}
        <h1 class="text-center">{{ $post->title }}</h1>
        <p class="text-center">
            <small class="mb-2 text-muted ">
                By:
                <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}
                </a>
                In
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>

                {{ $post->created_at->diffForHumans() }}
            </small>
        </p>
        <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid mx-auto" alt="...">

        <article class=" fs-5 py-4" style="text-align:justify">
            {!! $post->body !!}
        </article>

        {{-- Akhir Content --}}
        <a href="javascript:history.back()" class="btn btn-primary mt-5 ml-auto mb-5 w-100">Back to Posts</a>
    </div>
</div>
<button type="button" class=" mx-5 justify-content-end btn btn-secondary fixed-bottom btn-floating btn-lg mx-auto"
    style="bottom: 5vh;
  left: 80vw;" id="btn-back-to-top">
    <i class="bi bi-arrow-up-circle-fill"></i>
</button>
@endsection