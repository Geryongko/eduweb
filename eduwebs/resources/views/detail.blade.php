@extends('layouts.app')
@section('content')
  <h2>{{ $post->title }}</h2>
  <p><small>By {{ $post->writer->name }} | {{ $post->posted_at->format('Y-m-d') }}</small></p>
  <div>
    {!! nl2br(e($post->body)) !!}
  </div>
@endsection
