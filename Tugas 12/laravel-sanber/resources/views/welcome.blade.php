@extends('layout.master')
@section('title','Welcome')
@section('content')

<h1>SELAMAT DATANG! {{$bio['fname']}} {{$bio['lname']}}</h1>
<h3>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h3>
@endsection

