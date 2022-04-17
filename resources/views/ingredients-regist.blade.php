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
          <input class="form-check-input" name="base[]" type="checkbox" id="inlineCheckbox1" value="{{ $base->id }}">
          <label class="form-check-label" for="inlineCheckbox1">{{ $base->name }}</label>
        </div>
        @endforeach 
        <br><br>
        @foreach($splits as $split)
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="split[]" type="checkbox" id="inlineCheckbox1" value="{{ $split->id }}">
          <label class="form-check-label" for="inlineCheckbox1">{{ $split->name }}</label>
        </div>
        @endforeach 
        <br>
        <button type="submit" class="btn btn-outline-dark btn-sm" >登録</button></div>

      </form>
    </div>
  </section>

  

</div>

@endsection
