@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-5 px-2 ">
    {{-- breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        class="col-lg-8 col-sm-12" aria-label="breadcrumb">
        <ol class="breadcrumb fs-7">
            <li class="breadcrumb-item">
                <a href="/posts">Blog</a>
            </li>
            </li>
            <li class="breadcrumb-item">
                <a href="/posts?category={{ $post->category->slug }}">
                    {{$post->category->name }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ Str::limit($post->slug, 10, '...') }}
            </li>
        </ol>
    </nav>
    {{-- akhir breadcumb --}}
    <div class="col-md-8 bg-light pt-3">

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
                </a><br>
                {{ $post->created_at->diffForHumans() }}
            </small>
        </p>

        @if ($post->image)
        <div class="d-flex justify-content-center" style="max-height: 400px; oveflow:hidden">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3 mx-auto"
                alt="{{ $post->category->name }}">
        </div>
        @else
        <img src="https://source.unsplash.com/600x300?{{ $post->category->name }}"
            class="d-flex justify-content-center img-fluid mt-3 mx-auto" alt="{{ $post->category->name }}">
        @endif

        <article class="fs-6 py-4">
            {!! $post->body !!}
        </article>

        {{-- Akhir Content --}}
        <a href="/posts" class="btn btn-primary text-small col-lg-3 d-block mx-auto mb-4">
            <i class="bi bi-arrow-left-circle"></i> Back
        </a>
    </div>
</div>
<button type="button" class=" mx-5 justify-content-end btn btn-secondary fixed-bottom btn-floating btn-lg mx-auto"
    style="bottom: 5vh;
  left: 80vw;" id="btn-back-to-top">
    <i class="bi bi-arrow-up-circle-fill"></i>
</button>
<script src="/js/btt.js"></script>
@endsection