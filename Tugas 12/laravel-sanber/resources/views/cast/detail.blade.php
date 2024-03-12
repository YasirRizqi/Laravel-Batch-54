@extends('layout.master')
@section('title','Detail Category')
@section('content')

<div class="card">
    <h5 class="card-header">Detail Category</h5>
    <div class="card-body">
      <h5 class="card-text">Actor = {{$cast->name}}</h5>
      <h5 class="card-text">Bio = {{$cast->bio}}</h5>
      <h5 class="card-text">Age = {{$cast->age}}</h5>
      <a href="/cast/{{$cast->id}}/edit" class="btn btn-primary">Edit</a>
    </div>
  </div>

@endsection