@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>

  <a href="/dashboard/posts/create" class="btn btn-primary"><span data-feather="plus-square"></span> Create Post</a>

  <div class="table-responsive mt-3">
    <table class="table table-striped">
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
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-decoration-none"><span data-feather="eye"></span> Detail</a>
              <a href="" class="badge bg-warning text-decoration-none"><span data-feather="edit"></span> Edit</a>
              <a href="" class="badge bg-danger text-decoration-none"><span data-feather="trash-2"></span> Delete</a>
            </td>
          </tr>  
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection