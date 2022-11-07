
@extends('layouts.main')
@section('container')
<h1 class="my-3 text-center">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/news">
      @if (request('newscategory'))
      <input type="hidden" name="newscategory" value="{{ request('newscategory') }}">
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-primary" type="submit">Serch</button>
      </div>
    </form>
  </div>
</div>

@if ($lotNews->count())
<div class="container">
  <div class="row">
    @foreach ($lotNews as $news)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a href="/news?newscategory={{ $news->newscategory->slug }}" class="text-white text-decoration-none">{{ $news->newscategory->name }}</a></div>
         @if ($news->image)   
        <img src="{{ asset('storage/'. $news->image) }}" class="card-img-top" alt="{{ $news->newscategory->name }}">
          
        @else
        <img src="https://source.unsplash.com/500x400?{{ $news->newscategory->name }}" class="card-img-top" alt="{{ $news->newscategory->name }}">
        @endif
        
        <div class="card-body">
          <h5 class="card-title"><a href="/news/{{ $news->slug }}" class="text-decoration-none">{{ $news->title }}</a></h5>
          <p>
            <small class="text-muted">
              By, <a href="/news?author={{ $news->author->username }}" class="text-decoration-none">{{ $news->author->name }} </a>{{ $news->created_at->diffForHumans() }}
            </small>
          </p>
          <p class="card-text">{{ $news->excerpt }}</p>
          <a href="/news/{{ $news->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
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
  {{ $lotNews->links() }}
</div>

@endsection