@extends('layouts.app')



@section('navbar')
  @include('components.users-navbar')
@endsection




@section('content')
  <div style="text-align: center">
    <img src="{{ asset('img/top.jpg')}}" width="70%" height="70%">
  </div>

  <section class="py-5 text-center containe">
    <div class="container">
      
    </div>
  </section>

  @include('components.cocktails')
@endsection
