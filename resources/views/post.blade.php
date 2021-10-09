@extends('layouts.main')

@section('container')

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
        <li class="breadcrumb-item"><a href="/categories/">Categories</a>
        </li>
        <li class="breadcrumb-item"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ $post->slug }}</li>
    </ol>
</nav>
<h1 class="text-center">{{ $post->title }}</h1>
<p class="text-secondary text-center">By : <a href="/authors/{{ $post->author->username }}"
        class="text-decoration-none">{{ $post->author->name }}</a> </p>
<p class="text-secondary text-center
">In <a class="text-primary text-decoration-none" href="/categories/{{ $post->category->slug }}">
        {{ $post->category->name }}</a>
</p>

<div class="container">
    {!! $post->body !!}
</div>
<a href="/blog" class="btn btn-primary mt-5 ml-auto mb-5 w-100">Back to Posts</a>
@endsection