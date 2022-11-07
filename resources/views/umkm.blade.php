
@extends('layouts.main')
@section('container')
<h1 class="my-3 text-center">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/umkm">
      @if (request('umkmcategories'))
      <input type="hidden" name="umkmcategories" value="{{ request('umkmcategories') }}">
      @endif
      {{-- @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif --}}
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-primary" type="submit">Serch</button>
      </div>
    </form>
  </div>
</div>

@if ($lotUmkm->count())
<div class="container">
  <div class="row">
    @foreach ($lotUmkm as $umkm)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a href="/umkm?umkmcategories={{ $umkm->umkmcategories->slug }}" class="text-white text-decoration-none">{{ $umkm->umkmcategories->name }}</a></div>
         @if ($umkm->foto_product)   
        <img src="{{ asset('storage/'. $umkm->foto_product) }}" class="card-img-top" alt="{{ $umkm->umkmcategories->name }}">
          
        @else
        <img src="https://source.unsplash.com/500x400?{{ $umkm->umkmcategories->name }}" class="card-img-top" alt="{{ $umkm->umkmcategories->name }}">
        @endif
        
        <div class="card-body">
          <h5 class="card-title"><a href="/umkm/{{ $umkm->slug }}" class="text-decoration-none">{{ $umkm->nama_product }}</a></h5>
          <p>
            <small class="text-muted">
              By, {{ $umkm->nama_penjual }} <span> {{ $umkm->created_at->diffForHumans() }}</span>
            </small>
          </p>
          <p class="card-text">{{ $umkm->harga_minimum }} - {{ $umkm->harga_maximum }}</p>
          <a href="/umkm/{{ $umkm->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@else
<p class="text-center fs-3">No Post Faund.</p>
@endif
<div class="d-flex justify-content-center">
  {{ $lotUmkm->links() }}
</div>

@endsection