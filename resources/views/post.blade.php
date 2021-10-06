@extends('layouts.main')

@section('container')

<h1 class="text-center">{{ $post->title }}</h1>
<div class="container">
    {{-- <h6 class="text-secondary">By : {{ $post->author }}</h6> --}}
    {!! $post->body !!}
</div>
<a href="/blog" class="btn btn-primary">Back to Posts</a>
@endsection