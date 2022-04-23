@extends('layouts.app')

@section('content')
@include('components.top_image')
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($cocktails as $cocktail)
      @if($cocktail->users()->where('user_id', Auth::id())->exists())
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">
                  {{ $cocktail->name }}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick=location.href='home/show/{{ $cocktail->id }}'>view</button>
                  
                  <form action="{{ route('unfavorites', $cocktail) }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-sm btn-outline-secondary" onclick><span class="material-icons">favorite</span></button>
                  </form>

                </div>
                <small class="text-muted">おいしいよね：{{ $cocktail->users()->count() }}</small>
              </div>
            </div>
          </div>
        </div>
      @endif
      @endforeach
    </div>
  </div>
</div>
  


        
@endsection
