@extends('template-file.home')

@section('title')
    tambah data
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-danger">Tambah</a><br><br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($film as $key => $values)
            <tr>
              <th scope="row">{{$key + 1}}</th>
              <td>{{$values->judul}}</td>
              <td><a href="/cast/{{$values->id}}" class="btn btn-danger">Details</a></td>
            </tr> 
                
            @empty
                <p>No film</p>
            @endforelse
        </tbody>
      </table>    
@endsection
