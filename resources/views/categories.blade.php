@extends('layouts.main')

@section('container')
  <h1>Page Categories</h1>
  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
      <div class="col-md-4">
          <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card bg-dark text-white p-0">
              <img src="https://source.unsplash.com/500x350?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
              <div class="p-0 card-img-overlay d-flex align-items-center">
                <h5 class="card-title text-center py-4 px-3 flex-fill" style="background-color: rgba(0, 0, 0, 0.5)">
                  {{ $category->name }}
                </h5>
              </div>
            </div>
          </a>  
        </div>
        @endforeach
    </div>
  </div>

    
@endsection