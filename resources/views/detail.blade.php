@extends('layouts.main')
@section('container')

<div class="card">
  <div class="card-header">
    {{ $buku->id }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $buku->Judul }}</h5>
    <p class="card-text">{{ $buku->Sinopsis }}</p>
    <a href="/buku" class="btn btn-primary">Kembali</a>
  </div>
</div>