@extends('layout.master')
@section('title','Form Edit Cast')
@section('content')

<form action="/cast/{{$castID->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$castID->name}}" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control @error('name') is-invalid @enderror" id="age" value="{{$castID->age}}" name="age">
      @error('age')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label  for="bio">Bio</label>
      <input type="text" class="form-control  @error('name') is-invalid @enderror" id="bio" value="{{$castID->bio}}" name="bio">
      @error('bio')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection