@extends('layouts.app')
@section('content')
  <h2>Category: {{ $category->name }}</h2>
  @foreach($posts as $post)
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p>{{ $post->excerpt }}</p>
        <small>By {{ $post->writer->name }} | {{ $post->posted_at->format('Y-m-d') }}</small>
        <div><a href="{{ route('post.show', $post->slug) }}">read more...</a></div>
      </div>
    </div>
  @endforeach
@endsection
