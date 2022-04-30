@extends('layouts.app')

@section('navbar')
  @include('components.users.navbar')
@endsection


@section('header')
  @include('components.users.header')
@endsection


@section('content')
<div style="text-align: center">
  <img src="{{ asset('img/top.jpg')}}" width="70%" height="70%">
</div>

<div class="container">
  <section class="text-center container">
    <div class="row py-lg-5">

      <div class="col-6">
        <form action="{{ route('ingredients-store') }}" >
          <div class="ingredients-form">
          @csrf
          <p>ベース</p>
            @foreach($bases as $base)
            @if($base->users()->where('user_id', Auth::id())->doesntExist())
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="base[]" type="checkbox" id="{{ $base->name }}" value="{{ $base->id }}" >
              <label class="form-check-label" for="{{ $base->name }}">{{ $base->name }}</label>
            </div>
            @endif
            @endforeach 
    
            <br><br>
    
            <p>材料</p>
            @foreach($splits as $split)
            @if($split->users()->where('user_id', Auth::id())->doesntExist())
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="split[]" type="checkbox" id="{{ $split->name }}" value="{{ $split->id }}" >
              <label class="form-check-label" for="{{ $split->name }}">{{ $split->name }}</label>
            </div>
            @endif
            @endforeach 
            <br><br>
          </div>
            <button type="submit" class="btn btn-outline-dark btn-sm" >登録</button>
          </form>
      </div>
      

      <div class="col-6">
        <form action="{{ route('ingredients-delete') }}" >
          <div class="ingredients-form">
          @csrf
        <p>ベース</p>
            @foreach($bases as $base)
            @if($base->users()->where('user_id', Auth::id())->exists()) 
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="base[]" type="checkbox" id="{{ $base->name }}" value="{{ $base->id }}" >
              <label class="form-check-label" for="{{ $base->name }}">{{ $base->name }}</label>
            </div>
              @endif
            @endforeach 

            <br><br>

            <p>材料</p>
            @foreach($splits as $split)
            @if($split->users()->where('user_id', Auth::id())->exists()) 
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="split[]" type="checkbox" id="{{ $split->name }}" value="{{ $split->id }}" >
              <label class="form-check-label" for="{{ $split->name }}">{{ $split->name }}</label>
            </div>
            @endif
            @endforeach 
            <br><br>
          </div>
            <button type="submit" class="btn btn-outline-dark btn-sm" >削除</button>
          </form>
      </div>
            
    </div>
    <button type="button" class="btn btn-outline-dark " onclick=location.href='/can-make' >戻る</button>
  </section>
</div>

@endsection
