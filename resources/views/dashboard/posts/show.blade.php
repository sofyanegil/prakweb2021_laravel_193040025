@extends('dashboard.layouts.main')

@section('container')
<div class="row my-3 px-2 ">
  <div class="col-lg-8">
    {{-- Content --}}
    <h1 class="text-center">{{ $post->title }}</h1>
    <div class="row justify-content-center">
      <div class="col-lg-6 mx-auto">
        <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> To all my post</a>
        <a href="" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
        <a href="" class="btn btn-danger"> <span data-feather="x-circle"></span>Delete</a>
      </div>

    </div>
    <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" class="img-fluid mt-3 mx-auto"
      alt="...">

    <article class=" fs-5 py-4" style="text-align:justify">
      {!! $post->body !!}
    </article>

    {{-- Akhir Content --}}
    <a href="javascript:history.back()" class="btn btn-primary mt-5 ml-auto mb-5 w-100">Back to Posts</a>
  </div>
</div>
@endsection