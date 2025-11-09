@extends('layouts.app')
@section('content')
  <h2>Writers</h2>
  <div class="list-group">
    @foreach($writers as $w)
      <a href="{{ route('writers.show', $w->id) }}" class="list-group-item list-group-item-action">{{ $w->name }}</a>
    @endforeach
  </div>
@endsection
