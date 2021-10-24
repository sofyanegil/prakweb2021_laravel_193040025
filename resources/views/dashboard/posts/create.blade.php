@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label ">Title</label>
      <input type=" text" class="form-control @error('title') is-invalid  @enderror " id="title" name="title"
        value="{{old('title')}}" autofocus>
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid  @enderror" id="slug" name="slug"
        value="{{ old('slug')}}">
      @error('slug')
      <div class=" invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>


    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select @error('category_id') is-invalid  @enderror" name="category_id" id="category">
        <option disabled selected class="bg-light">---Select Category---</option>
        @foreach ($categories as $category)
        @if ( $category->id == old('category_id'))
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
        <option disabled class="bg-light">Add New Category ? Contact Admin</option>
      </select>
      @error('category_id')
      <div class=" invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input class="form-control @error ('image') is-invalid @enderror" type="file" id="image" name="image"
        onchange="previewImage()">
      <img class="img-preview img-fluid my-3 col-sm-5">
      @error('image')
      <div class=" invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
      @error('body')
      <p class="text-danger">{{ $message }}</p>
      @enderror
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary d-block mx-auto"> <span data-feather="plus-circle"></span> Create
      Post</button>
  </form>
</div>

<script>
  // Slug
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });


  // Trix Editor
  document.addEventListener('trix-file-accept', function (e) {
    e.preventDefault();
  })

  // Preview Image
 function previewImage() {
     const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview')
    
    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
    }
 }
</script>

@endsection