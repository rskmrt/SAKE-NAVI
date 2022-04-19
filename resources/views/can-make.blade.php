@extends('layouts.app')

@section('content')
@include('components.top_image')


<div class="container">

    <section class="py-5 text-center container">
      <button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/can-make/regist">材料の登録</button> 
    </section>
    
    今すぐ作れる
  <div class="album py-5 bg-light">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @if(!empty($cocktails))
      @foreach($cocktails as $cocktail)
        {{ $cocktail->name }}
      @endforeach
      @endif
    </div>
  </div>
</div>
        
@endsection
