@extends('dashboard.layouts.main')

@section('container')
<div class="row px-2 mb-5">
  <div class="col-md-8 bg-light pt-3">
    <div class="row mt-2 mb-2 mx-sm-auto  ">
      <div class="ms-0 col-sm-12 ">
        <a href="/dashboard/posts" class="btn btn-secondary"> <span data-feather="arrow-left-circle"></span> To
          all my
          post</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"> <span
            data-feather="edit"></span>
          Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span
              data-feather="x-circle"></span>Delete</button>
        </form>
      </div>
    </div>
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

    <article class=" fs-6 py-4">
      {!! $post->body !!}
    </article>

    {{-- Akhir Content --}}
  </div>
</div>

<button type="button" class=" mx-5 d btn btn-secondary fixed-bottom btn-floating btn-lg mx-auto" style="bottom: 5vh;
       left: 80vw;" id="btn-back-to-top">
  <span data-feather="arrow-up-circle" style="width:">
</button>
<script src="/js/btt.js"></script>
@endsection