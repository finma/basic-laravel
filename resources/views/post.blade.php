@extends('layouts.main')

@section('container')

  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <article>
          <h1>{{ $post->title }}</h1>
          <p>By <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
          
          @if ($post->image)
            <img 
              src="{{ asset('storage/' . $post->image)  }}" 
              alt="{{ $post->category->name }}" 
              class="img-fluid mt-3" 
              width="1500"
              height="400"
              style="width: 1500px; height: 400px; object-fit: cover;"
            >
          @else
            <img 
              src="https://source.unsplash.com/1500x600?{{ $post->category->name }}" 
              alt="Banner" 
              class="img-fluid mt-3"
            >
          @endif

          <div class="py-4">
            {!! $post->body !!}
          </div>
          
          <a href="/posts" class="btn btn-primary">Back to posts</a>
        </article>
      </div>
    </div>
  </div>

@endsection
    