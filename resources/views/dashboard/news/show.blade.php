@extends('dashboard.layouts.main')
@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
       
      <h2 class="mb-2">{{ $news->title }}</h2>
      <a href="/dashboard/news" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my news</a>
      <a href="/dashboard/news/{{ $news->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> edit</a>
      
      <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are You Sure?')" ><span data-feather="x-circle" class="align-text-bottom"></span>Delete</button>
      </form>
      
      @if ($news->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->newscategory->name }}" class="img-fluid mt-3">
      </div>
          
      @else
      <img src="https://source.unsplash.com/1200x400?{{ $news->newscategory->name }}" alt="{{ $news->newscategory->name }}" class="img-fluid mt-3">
      @endif
      
      <article class="my-3">
        {!!  $news->body !!}
      </article>
    </div>
  </div>
</div>
@endsection