@extends('dashboard.layouts.main')
@section('container')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <h1 class="h3 mb-0 text-gray-800">Berita dan Agenda Desa</h1>
  <div class="">
    <a href="/dashboard/news/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      Tambah Berita</a>
    {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm dropdown-toggle">
      Laporan</a> --}}
  </div>
</div>

{{-- <!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Pemasukan Bulanan</div>
            <div class="h5 mb-0 font-weight-bold text-black-800">$40,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-orange-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Pemasukan Tahunan</div>
            <div class="h5 mb-0 font-weight-bold text-black-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-orange-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">News And Schedule</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th >#</th>
            <th class="col-6">Title</th>
            <th class="col-2">Category</th>
            <th class="col-2">Publish</th>
            <th class="col-2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($lotNews as $news)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $news->title }}</td>
            <td class="text-center">{{ $news->newscategory->name }}</td>
            <td class="text-center">{{ $news->created_at }}</td>
            <td class="text-center">
              <a href="/dashboard/news/{{ $news->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/news/{{ $news->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

              <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span
                    data-feather="x-circle"></span></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        {{ $lotNews->links() }}
      </div>
    </div>
  </div>
</div>
@endsection

{{-- <div class="table-responsive col-lg-10">
  <a href="/dashboard/news/create" class="btn btn-primary mb-3">Create New News</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($lotNews as $news)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $news->title }}</td>
        <td>{{ $news->newscategory->name }}</td>
        <td>
          <a href="/dashboard/news/{{ $news->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
          <a href="/dashboard/news/{{ $news->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

          <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span
                data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}