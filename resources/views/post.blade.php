@extends('layouts.main')

@section('container')
<article>
    <h2 class="text-center">{{ $post['title'] }}</h2>
    <div class="container">
        <h6 class="text-secondary">By : {{ $post['author'] }}</h6>
        <p>{{ $post['body'] }}</p>
    </div>
</article>

<a href="/blog" class="btn btn-primary">Back to Posts</a>
@endsection