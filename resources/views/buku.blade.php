@extends('layouts.main')
@section('container')

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

<div class="container-fluid">
    <a href="/buku/create" class="btn btn-primary">Create</a>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">No ISBN</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $buku->id }}</th>
                    <td>{{ $buku->NO_ISBN }}</td>
                    <td>{{ $buku->Judul }}</td>
                    <td><a href="buku/{{ $buku->id }}/detail" class="btn btn-primary">Detail</a></td>
                    <td>
                        <a href="/buku/{{ $buku->id }}/edit" class="btn btn-warning">Edit</a> |
                        <form action="/buku/{{ $buku->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete"></input>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</div>
@endsection