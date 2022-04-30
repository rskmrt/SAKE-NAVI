@extends('layouts.app')

@section('search')
  @include('components.users.search')
@endsection


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

<section class="py-5 text-center containe">
  <div class="container">
    <button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/can-make/create">材料の登録</button> 
  </div>
</section>

@include('components.users.cocktails')

@endsection