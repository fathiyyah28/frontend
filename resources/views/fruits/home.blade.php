@extends('layouts.frontend')

@section('title', 'Beranda - Fruits')

@section('content')
  <!-- Konten hasil konversi dari fruits/index.html -->
  <section class="hero">
    <div class="container">
      <h1>Selamat datang di Fruits Store</h1>
      <p>Template Fruits telah terintegrasi dengan Laravel.</p>
    </div>
  </section>

  <!-- Contoh section: (silakan ganti dengan markup dari fruits/index.html) -->
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Fresh</h3>
          <p>Buah segar setiap hari.</p>
        </div>
        <div class="col-md-4">
          <h3>Quality</h3>
          <p>Kualitas terjamin.</p>
        </div>
        <div class="col-md-4">
          <h3>Fast Delivery</h3>
          <p>Pengiriman cepat.</p>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
