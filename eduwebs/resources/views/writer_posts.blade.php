@extends('layouts.app')
@section('content')
  <h2>Posts by {{ $writer->name }}</h2>
  @foreach($posts as $post)
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p>{{ $post->excerpt }}</p>
        <a href="{{ route('post.show', $post->slug) }}">read more...</a>
      </div>
    </div>
  @endforeach
@endsection
