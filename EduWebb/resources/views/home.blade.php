@extends('layouts.app')
@section('content')
  <h1>Welcome to EduFun</h1>
  <p>Latest articles:</p>
  <div class="row">
    @foreach($latest as $post)
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="https://via.placeholder.com/600x200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">read more...</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
