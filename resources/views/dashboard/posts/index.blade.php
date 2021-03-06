@extends('dashboard.layouts.main')

@section('container')
<div
  class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 bg-light border-bottom">
  <h1 class="h2 mx-auto bg">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8 col-sm-12 alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if ($posts->count())
<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-success my-3"> <span data-feather="plus-circle"></span> Create new
    post</a>
  <table class="table table-striped table-sm">
    <thead class="bg-dark text-white text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <div class=" row-cols-sm-9 row-cols-lg-4 d-flex justify-content-center">
            <a href="/dashboard/posts/{{ $post->slug }}" class="mx-0 badge bg-info my-2 me-1"> <span
                data-feather="eye"></span></a>

            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="mx-0 badge bg-warning my-2 me-1"><span
                data-feather="edit"></span></a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class=" mx-0 badge bg-danger border-0 w-100 my-2" onclick="return confirm('Are You Sure?')"><span
                  data-feather="x-circle"></span></button>
            </form>

          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@else
<div class="alert alert-warning col-sm-6 mx-auto align-items-center h-100 d-flex" role="alert">
  <h1 class="text-center fs-1 flex-fill fs-3 align-self-auto">You have no posts</h1>

</div>
<a href="/dashboard/posts/create" class="d-block mx-auto btn btn-success col-lg-3">
  <span data-feather="plus-circle">
  </span>
  Create new
  post
</a>
@endif
@endsection