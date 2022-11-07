@extends('layouts.main')
@section('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
       
      <h2 class="mb-2">{{ $news->title }}</h2>
      <p>By, <a href="/news?author={{ $news->author->username }}" class="text-decoration-none">{{ $news->author->name }}</a> in <a href="/news?newscategory={{ $news->newscategory->slug }}" class="text-decoration-none">{{ $news->newscategory->name }}</a></p>
      
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

      <a href="/news">Back to Posts</a>
    </div>
  </div>
</div>

   

@endsection
