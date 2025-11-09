@extends('layouts.app')
@section('content')
  <h2>Categories</h2>
  <div class="list-group">
    @foreach($categories as $c)
      <a href="{{ route('category.show', $c->slug) }}" class="list-group-item list-group-item-action">{{ $c->name }}</a>
    @endforeach
  </div>
@endsection
