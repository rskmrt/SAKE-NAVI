@extends('users.layouts.app')


@section('content')

<div style="text-align: center">
  <img src="{{ asset('img/top.jpg')}}" width="70%" height="70%">
</div>

<section class="py-5 text-center containe">
  <div class="container">
    
  </div>
</section>

 @include('users.components.cocktails')

@endsection
