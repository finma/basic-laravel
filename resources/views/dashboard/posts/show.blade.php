@extends('dashboard.layouts.main')

@section('container')
  
  <div class="container mb-5">
    <div class="row justify-content-start">
      <div class="col-md-8">

        <article>
          <h1>{{ $post->title }}</h1>
          <a 
            href="/dashboard/posts" 
            class="btn btn-primary"
          >
            <span data-feather="arrow-left"></span> Back to posts
          </a>
          <a 
            href="/dashboard/posts/{{ $post->slug }}/edit" 
            class="btn btn-warning text-decoration-none"
          >
            <span data-feather="edit"></span> Edit
          </a>
          <form 
            action="/dashboard/posts/{{ $post->slug }}" 
            method="POST" 
            class="d-inline" 
            onclick="confirm('Are you sure?')"
          >
            @method('delete')
            @csrf
            <button type="submit"class="btn btn-danger ">
              <span data-feather="trash-2"></span> Delete
            </button>
          </form>

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
          
        </article>
      </div>
    </div>
  </div>
    
@endsection