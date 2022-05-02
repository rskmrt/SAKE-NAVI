@extends('layouts.app')

@section('search')
  @include('components.admins.search')
@endsection


@section('navbar')
  @include('components.admins.navbar')
@endsection


@section('header')
  @include('components.admins.header')
@endsection


@section('content')
  @include('components.admins.homemenu')
  <div class="container">

    <section class="py-5 container">
      <div class="col-lg-6 col-md-8 mx-auto">
      <form action="/admin/cocktail/store" method="POST" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="mb-3">
          <label for="name" class="form-label">カクテル名</label>
          <input name="name" type="text" class="form-control" id="cocktailname">
        </div>
        <input type="file" id="file" name="file" class="form-control">


        <br>
        
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

        <br>
  
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

        <br>
  
        <p>テイスト
          @foreach($tastes as $taste)
          <div class="form-check-inline">
            <input class="form-check-input" name="taste" type="radio" value="{{ $taste->id }}" id="{{ $taste->name }}">
            <label class="form-check-label" for="{{ $taste->name }}">
              {{$taste->name}}
            </label>
          </div>
          @endforeach
        </p>

        <br>
  
        <p>アルコール度数
          @foreach($strengths as $strength)
          <div class="form-check-inline">
            <input class="form-check-input" name="strength" type="radio" value="{{ $strength->id }}" id="{{ $strength->name }}" >
            <label class="form-check-label" for="{{ $strength->name }}">
              {{$strength->name}}
            </label>
          </div>
          @endforeach
        </p>

        <br>
        
        <p>技法
          @foreach($techniques as $technique)
          <div class="form-check-inline">
            <input class="form-check-input" name="technique" type="radio" value="{{ $technique->id }}" id="{{ $technique->name }}">
            <label class="form-check-label" for="{{ $technique->name }}">
              {{$technique->name}}
            </label>
          </div>
          @endforeach
        </p>

        <br>
  
        <p>グラスタイプ
          @foreach($glasses as $glass)
          <div class="form-check-inline">
            <input class="form-check-input" name="glass" type="radio" value="{{ $glass->id }}" id="{{ $glass->name }}">
            <label class="form-check-label" for="{{ $glass->name }}">
              {{$glass->name}}
            </label>
          </div>
          @endforeach
        </p>

        <br>

        <p>作り方
          <div class="textarea">
          <textarea class="textarea" id="how_to" name="how_to"></textarea>
        </div>
        </p>
        
        <div style="text-align: center">
          <button type="button" class="btn btn-outline-dark" onclick=location.href='/admin'>戻る</button>
          <button type="submit" class="btn btn-outline-dark">登録</button>
        </div>
      </form>
      </div>
    </section>
      
  </div> 
@endsection
