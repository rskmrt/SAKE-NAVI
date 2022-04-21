@extends('layouts.app')

@section('content')


@include('components.top_image')


<div class="container">

  <section class="text-center container">
    <div class="row py-lg-5">
      <form action="{{ route('ingredients-store') }}" >
      @csrf
        @foreach($bases as $base)
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="base[]" type="checkbox" id="{{ $base->name }}" value="{{ $base->id }}" @if($base->users()->where('user_id', Auth::id())->exists()) disabled @endif>
          <label class="form-check-label" for="{{ $base->name }}">{{ $base->name }}</label>
        </div>
        @endforeach 

        <br><br>

        @foreach($splits as $split)
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="split[]" type="checkbox" id="{{ $split->name }}" value="{{ $split->id }}" @if($split->users()->where('user_id', Auth::id())->exists()) disabled @endif>
          <label class="form-check-label" for="{{ $split->name }}">{{ $split->name }}</label>
        </div>
        @endforeach 
        <br><br>
        <button type="button" class="btn btn-outline-dark btn-sm" onclick=location.href='/can-make' >戻る</button>
        <button type="submit" class="btn btn-outline-dark btn-sm" >登録</button>
      </form>
    </div>
  </section>

  

</div>

@endsection
