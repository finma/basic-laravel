@extends('dashboard.layouts.main')

@section('container')
  
  <div class="container mb-5">
    <div class="row justify-content-start">
      <div class="col-md-8">

        <article>
          <h1>{{ $post->title }}</h1>
          <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span> Back to posts</a>
          <a href="#" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
          <a href="#" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>

          <img src="https://source.unsplash.com/1500x600?{{ $post->category->name }}" alt="Banner" class="img-fluid mt-3">

          <div class="py-4">
            {!! $post->body !!}
          </div>
          
        </article>
      </div>
    </div>
  </div>
    
@endsection