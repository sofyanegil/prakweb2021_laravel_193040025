@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8 col-sm-12 alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-success"> <span data-feather="plus-circle"></span> Create new
    post</a>
  <table class="table table-striped table-sm">
    <thead>
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
          <div class=" row-cols-sm-9 row-cols-lg-4 d-flex justify-content-end">
            <a href="/dashboard/posts/{{ $post->slug }}" class="mx-0 badge bg-info mb-2 me-1"> <span
                data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="mx-0 badge bg-warning mb-2 me-1"><span
                data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class=" mx-0 badge bg-danger border-0 w-100" onclick="return confirm('Are You Sure?')"><span
                  data-feather="x-circle"></span></button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection