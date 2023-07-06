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
            @forelse ($film as $key => $value)
            <tr>
              <th scope="row">{{$key + 1}}</th>
              <td>{{$value->judul}}</td>
              <td>
                <form action="/cast/{{$value->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <a href="/cast/{{$value->id}}" class="btn btn-info">Details</a>
                  <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
            </tr> 
                
            @empty
                <p>No film</p>
            @endforelse
        </tbody>
      </table>    
@endsection
combo box 
checkbox