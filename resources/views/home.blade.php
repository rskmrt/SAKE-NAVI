@extends('layouts.app')

@section('content')


@include('components.top_image')


<div class="container">

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <h1 class="fw-light">Search</h1>
      <div class="col-lg-6 col-md-8 mx-auto">
        
        <form method="GET" action="{{ route('home') }}">
            <div class="input-group">
                <input type="text" class="form-control input-group-prepend" placeholder="カクテル名で検索" name="text" value="@if (isset($text_search)) {{ $text_search }} @endif">
                <button class="btn btn-primary" type="submit">
                  <span class="material-icons">search</span>  
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

  @include('components.cocktails')
  {{ $cocktails->links() }}

</div>

@endsection
