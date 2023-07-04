@extends('template-file.home')

@section('title')
    Details
@endsection

@section('content')
    <h1>{{$films->judul}}</h1>
    <p>{{$films->ringkasan}}</p>
    <h2>{{$films->genre}}</h2>
    <h2>{{$films->tahun}}</h2>
@endsection
