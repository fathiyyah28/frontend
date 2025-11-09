@extends('layouts.frontend')

@section('title', '404 Not Found')

@section('content')
  <div class="container text-center py-5">
    <h1>404</h1>
    <p>Halaman tidak ditemukan.</p>
    <a href="{{ route('fruits.home') }}" class="btn btn-primary">Kembali ke Beranda</a>
  </div>
@endsection
