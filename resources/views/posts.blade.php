@extends('layouts.main')

@section('container')
  <h1 class="mb-3 text-center">{{ $title }}</h1>
  
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('user'))
          <input type="hidden" name="user" value="{{ request('user') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-secondary " type="submit"><i class="bi bi-search"></i> Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="card mb-3">
      <img src="https://source.unsplash.com/1500x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->name }}">
      <div class="card-body">
        <h5 class="card-title fs-4">
          <a href="{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
            {{ $posts[0]->title }}
          </a>
        </h5>
        <p>
          <small>
            By : <a href="/posts?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
      </div>
    </div>
  
    @if ($posts->count() > 1)
      <div class="container p-0">
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.5)">
                  <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                    {{ $post->category->name }}
                  </a>
                </div>
                <img src="https://source.unsplash.com/500x350?{{ $post->category->username }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">
                      {{ $post->title }}
                    </a>
                  </h5>
                  <p>
                    <small>
                      By : <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in  <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> <br>
                      {{ $post->created_at->diffForHumans() }}
                    </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endif
  @else
    <p>Post Not Found</p>
  @endif

  <div class="d-flex justify-content-center my-5">
    {{ $posts->links() }}
  </div>

@endsection