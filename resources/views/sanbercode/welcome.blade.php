@extends('template-file.home')

@section('title')
WELCOME    
@endsection

@section('content')

    <b>
        <h1>SELAMAT DATANG! {{$firstName}} {{$lastName}}</h1>
        <h3>Terimakasih telah bergabung di sanberbook. Social media kita bersama!</h3>
    </b>
    
@endsection
