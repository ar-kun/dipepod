@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post wisata</h1>
</div>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New wisata</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pengunjung</th>
              <th scope="col">Jumlah Pembelian</th>
              <th scope="col">Status Pembayaran</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lotWisata as $wisata)    
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $wisata->user->name }}</td>
              <td>{{ $wisata->kuantitas }}</td>
              @if ($wisata->status_pembayaran)
              <td>Sudah Bayar</td>
              @else
              <td class="text-warning">Belum Bayar</td>
              @endif
              <td>
                <a href="/dashboard/wisata/{{ $wisata->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/wisata/{{ $wisata->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
               
                <form action="/dashboard/wisata/{{ $wisata->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')" ><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection