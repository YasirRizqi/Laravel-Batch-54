@extends('layout.master')
@section('title','Home')
@section('content')

    <h1>SanberBook</h1>
    <h3>Social Media Developer Santai Berkualitas</h3>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
    <h4>Benefit Join di SanberBook</h4>
    <ul>
      <li>Mendapatkan motivasi dari sesama developer</li>
      <li>Sharing knowledge dari para mastah Sanber</li>
      <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <ol>
      <li>Mengunjungi website ini</li>
      <li><a href="{{ route('form') }}">Form Sign Up</a></li>
      <li>Selesai!</li>
    </ol>
@endsection



<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar Laravel</title>
  </head>
 
  </body>
</html> -->
