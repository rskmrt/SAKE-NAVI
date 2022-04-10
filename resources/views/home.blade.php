@extends('layouts.app')

@section('content')



<div class="card">
  <img src="{{ asset('img/top.jpg') }}" alt="">
</div>

<div class="container">

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <h1 class="fw-light">Search</h1>
      <div class="col-lg-6 col-md-8 mx-auto">
        
        <form method="GET" action="{{ route('home') }}">
          <div class="input-group">
            <input type="text" class="form-control input-group-prepend" placeholder="カクテル名で検索" name="text" value="@if (isset($text_search)) {{ $text_search }} @endif">
            <button class="btn btn-primary" type="submit">
              <span class="material-icons">
                search
                </span>
                
            </button>
          </div>
        </form>
 
        <form action="{{ route('home') }}">
          <div class="checkboxform">

            <p>ベース
              @foreach($bases as $base)
              <div class="form-check-inline">
                <input class="form-check-input" name="base[]" type="checkbox" value="{{ $base->id }}" id="{{ $base->name }}" >
                <label class="form-check-label" for="{{ $base->name }}">
                  {{$base->name}}
                </label>
              </div>
              @endforeach
            </p>

            <p>材料
              @foreach($splits as $split)
              <div class="form-check-inline">
                <input class="form-check-input" name="split[]" type="checkbox" value="{{ $split->id }}" id="{{ $split->name }}" >
                <label class="form-check-label" for="{{ $split->name }}">
                  {{$split->name}}
                </label>
              </div>
              @endforeach
            </p>

            <p>テイスト
              @foreach($tastes as $taste)
              <div class="form-check-inline">
                <input class="form-check-input" name="taste[]" type="checkbox" value="{{ $taste->id }}" id="{{ $taste->name }}">
                <label class="form-check-label" for="{{ $taste->name }}">
                  {{$taste->name}}
                </label>
              </div>
              @endforeach
            </p>

            <p>アルコール度数
              @foreach($strengths as $strength)
              <div class="form-check-inline">
                <input class="form-check-input" name="strength[]" type="checkbox" value="{{ $strength->id }}" id="{{ $strength->name }}">
                <label class="form-check-label" for="{{ $strength->name }}">
                  {{$strength->name}}
                </label>
              </div>
              @endforeach
            </p>
            
            <p>技法
              @foreach($techniques as $technique)
              <div class="form-check-inline">
                <input class="form-check-input" name="technique[]" type="checkbox" value="{{ $technique->id }}" id="{{ $technique->name }}">
                <label class="form-check-label" for="{{ $technique->name }}">
                  {{$technique->name}}
                </label>
              </div>
              @endforeach
            </p>

            <p>グラスタイプ
              @foreach($glasses as $glass)
              <div class="form-check-inline">
                <input class="form-check-input" name="glass[]" type="checkbox" value="{{ $glass->id }}" id="{{ $glass->name }}">
                <label class="form-check-label" for="{{ $glass->name }}">
                  {{$glass->name}}
                </label>
              </div>
              @endforeach
            </p>
          </div>
          <button class="btn btn-primary" type="submit">検索</button>
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
