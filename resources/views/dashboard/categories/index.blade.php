@extends('dashboard.layouts.main')

@section('container')
<div
  class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 bg-light border-bottom">
  <h1 class="h2 mx-auto bg">Post Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-6 col-sm-12 alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive col-lg-6">
  <div class="alert alert-danger  alert-dismissible fade show" role="alert">
    Delete Category make all posts in that category will be delete
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <a href="/dashboard/categories/create" class="btn btn-success my-3"> <span data-feather="plus-circle"></span> Add new
    category</a>

  <table class="table table-striped table-sm">
    <thead class="bg-dark text-white text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>
          <div class=" row-cols-sm-9 row-cols-lg-4 d-flex justify-content-center">
            <a href="/dashboard/categories/{{ $category->id }}/edit" class="mx-0 badge bg-warning my-2 me-1"><span
                data-feather="edit"></span></a>

            <form action="/dashboard/categories/{{ $category->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class=" mx-0 badge bg-danger border-0 w-100 my-2"
                onclick="return confirm('Are You Sure? All Post in this Category will be Delete')"><span
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