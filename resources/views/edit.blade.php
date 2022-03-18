@extends('layouts.main')
@section('container')

<div class="col-lg-4">
@if (session('success'))
<div class="alert-success">
    <p>{{ session('success')}}</p>
</div>
@endif

@if ($errors->any())
<div class="alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <form action="/buku/{{$buku->id}}" method="POST">
        @csrf
        @method("PUT")
        <form action="/buku" method="POST">
        @csrf
        <label for="Noisbn" class="form-label">No ISBN</label>
        <input type="text" name="NO_ISBN" class="form-control" id="NO_ISBN">
        
        <label for="Judul" class="form-label">Judul</label>
        <input type="text" name="Judul" class="form-control" id="Judul">
        
        <label for="Penulis" class="form-label">Penulis</label>
        <input type="text" name="Penulis" class="form-control" id="Penulis">
        
        <label for="Sinopsis" class="form-label">Sinopsis</label>
        <input type="text" name="Sinopsis" class="form-control" id="Sinopsis">
        <br>
        
        <button class="btn btn-warning" type="submit">Edit</button>
        </div>
    </form>
</div>
@endsection