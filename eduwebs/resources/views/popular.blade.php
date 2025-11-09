@extends('layouts.app')
@section('content')
  <h2>Popular Articles</h2>
  @foreach($popular as $post)
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $post->title }}</h5>
        <p>{{ $post->excerpt }}</p>
        <small>Views: {{ $post->views }}</small>
        <a href="{{ route('post.show', $post->slug) }}">read more...</a>
      </div>
    </div>
  @endforeach
  <div class="mt-3">{{ $popular->links() }}</div>
@endsection
