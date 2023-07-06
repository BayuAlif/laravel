@extends('template-file.home')

@section('title')
    tambah data
@endsection

@section('content')
    <form action="/cast/{{$films->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="@error('judul') is-invalid @enderror form-control" placeholder="Masukan judul"
                name="judul" value="{{$films->judul}}">
        </div>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>ringkasan</label>
            <textarea class="@error('ringkasan') is-invalid @enderror form-control" rows="3" placeholder="Masukan deskripsi"
                name="ringkasan">{{$films->ringkasan}}</textarea>
        </div>
        @error('ringkasan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Genre</label>
            <select class="@error('genre') is-invalid @enderror form-control" name="genre">
                <option selected>{{$films->genre}}</option>
                <option>Action</option>
                <option>Adventure</option>
                <option>Comedy</option>
                <option>Drama</option>
                <option>Fantasy</option>
                <option>Magic</option>
                <option>Romance</option>
                <option>Sci-fi</option>  
            </select>
        </div>
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Tahun</label>
            <select class="@error('tahun') is-invalid @enderror form-control" name="tahun">
                <option selected>{{$films->tahun}}</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
            </select>
        </div>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {{-- <div class="form-group">
            <label>poster</label>
            <input type="file" class="@error('poster') is-invalid @enderror form-control-file" name="poster">
        </div>
        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <button type="submit" class="btn btn-primary">update</button>
    </form>
@endsection
