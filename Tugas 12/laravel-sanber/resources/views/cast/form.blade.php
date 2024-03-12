@extends('layout.master')
@section('title','Form Add Cast')
@section('content')

<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control @error('name') is-invalid @enderror" id="age" placeholder="Your Age" name="age">
      @error('age')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label  for="bio">Bio</label>
      <input type="text" class="form-control  @error('name') is-invalid @enderror" id="bio" placeholder="Your Bio" name="bio">
      @error('bio')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection