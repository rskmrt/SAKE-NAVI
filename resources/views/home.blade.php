@extends('layouts.app')

@section('content')

<div class="card">
  <img src="{{ asset('img/top.jpg') }}" alt="">
</div>

<div class="container">
         
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Search</h1>
        <form method="GET" action="{{ route('home') }}">
          <div class="input-group">
            <input type="text" class="form-control input-group-prepend" placeholder="フリーワード" name="search" value="@if (isset($search)) {{ $search }} @endif">
            <button class="btn btn-primary" type="submit">検索</button>
          </div>
      </form>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($cocktails as $cocktail)
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">
                {{ $cocktail->name }}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick=location.href='show/{{ $cocktail->id }}'>view</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick=location.href='#'><span class="material-icons">favorite_border</span></button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
  {{ $cocktails->links() }}
             
</div>

@endsection
