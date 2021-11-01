@extends('layouts.main')

@section('container')

  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <article>
          <h1>{{ $post->title }}</h1>
          <p>By <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
          
          <img src="https://source.unsplash.com/1500x600?{{ $post->category->name }}" alt="Banner" class="img-fluid">

          <div class="py-4">
            {!! $post->body !!}
          </div>
          
          <a href="/posts" class="btn btn-primary">Back to posts</a>
        </article>
      </div>
    </div>
  </div>

@endsection
    