@extends('dashboard.layouts.main')

@section('container')
<div class="row my-3 px-2 ">
  <div class="col-lg-8">
    {{-- Content --}}
    <div class="row mt-2 mb-2 mx-sm-auto  ">
      <div class="col-lg-6 ms-0 col-sm-12 ">
        <a href="/dashboard/posts" class="btn btn-secondary"> <span data-feather="arrow-left-circle"></span> To all my
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

    <h1 class="text-center">{{ $post->title }}</h1>
    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid mt-3 mx-auto"
      alt="...">

    <article class=" fs-5 py-4" style="text-align:justify">
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