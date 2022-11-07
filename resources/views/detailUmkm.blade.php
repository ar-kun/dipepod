@extends('layouts.main')
@section('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
       
      <h2 class="mb-2">{{ $umkm->foto_product }}</h2>
      <p>By, {{ $umkm->nama_penjual }} in <a href="/umkm?umkmcategories={{ $umkm->umkmcategories->slug }}" class="text-decoration-none">{{ $umkm->umkmcategories->name }}</a></p>
      
       @if ($umkm->foto_product)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/'. $umkm->foto_product) }}" alt="{{ $umkm->umkmcategories->name }}" class="img-fluid mt-3">
      </div>
          
      @else
      <img src="https://source.unsplash.com/1200x400?{{ $umkm->umkmcategories->name }}" alt="{{ $umkm->umkmcategories->name }}" class="img-fluid mt-3">
      @endif
      
      <article class="my-3">
        {!!  $umkm->deskripsi !!}
        {{ $umkm->kondisi_penyimpanan }}
        {{ $umkm->berat_produk }}
        {{ $umkm->expired }}
      </article>

      <a href="/umkm">Back to Posts</a>
    </div>
  </div>
</div>

   

@endsection
