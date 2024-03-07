@extends('layout.master')
@section('title','Register')
@section('content')

<h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="{{route('welcome')}}" method="POST">
      @csrf
      <label for="fname">First Name:</label> <br />
      <input type="text" name="fname" id="fname" /><br />
      <br />
      <label for="lname">Last Name:</label> <br />
      <input type="text" name="lname" id="lname" /> <br />
      <br />
      <label for="gender"> Gender: </label> <br />
      <input type="radio" name="gender" id="male" value="Male" />
      <label for="male">Male</label><br />
      <input type="radio" name="gender" id="female" value="Female" />
      <label for="female">Female</label><br />
      <input type="radio" name="gender" id="other" value="Other" />
      <label for="other">Other</label><br /><br />

      <label for="negara">Nationallity: </label> <br />
      <select name="negara" id="negara">
        <option value="indonesia">Indonesia</option>
        <option value="korea">Korea</option>
        <option value="jepang">Jepang</option></select
      ><br />
      <br />
      <p>Language Spoken:</p>
      <input type="checkbox" name="english" id="english" value="English" />
      <label for="english">English</label> <br />
      <input type="checkbox" name="spanyol" id="spanyol" value="Spanyol" />
      <label for="spanyol">Bahasa Spanyol</label> <br />
      <input type="checkbox" name="jepang" id="jepang" value="Jepang" />
      <label for="english">Bahasa Jepang</label> <br />

      <label for="bio">Bio:</label> <br />
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br />
      <input type="submit" value="SignUp" />
    </form>
@endsection


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar Laravel</title>
  </head>
  <body>
    
  </body>
</html>
