@extends('layout.master')
@section('title','All Actors')
@section('content')
<a class="btn btn-primary" href="/cast/create" role="button">Add Cast</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Bio</th>
      <th scope="col"></th>
  </thead>
  <tbody>
    @foreach ($cast as $item)
    <tr>
        <th scope="row">{{$loop->index +1 }}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->bio}}</td>
        <td>
            <form action="/cast/{{$item->id}}" method="POST">
                @csrf
                <a class="btn btn-primary" href="/cast/{{$item->id}}" role="button">Detail</a>
                @method('DELETE')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </td>
      
    </tr>
    @endforeach
  
  </tbody>
</table>
@endsection