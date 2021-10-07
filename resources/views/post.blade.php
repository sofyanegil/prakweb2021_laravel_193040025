@extends('layouts.main')

@section('container')

<h1 class="text-center">{{ $post->title }}</h1>
<h6 class="text-secondary">By : {{ $post->author }}</h6>
<p>In <a class="text-primary text-decoration-none" href="/categories/{{ $post->category->slug }}">
        {{ $post->category->name }}</a></p>

<div class="container">
    {!! $post->body !!}
</div>
<a href="/blog" class="btn btn-primary">Back to Posts</a>
@endsection