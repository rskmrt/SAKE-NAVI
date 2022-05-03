@extends('layouts.app')

@section('search')
  @include('components.users.search')
@endsection


@section('navbar')
  @include('components.users.navbar')
@endsection


@section('search')
  @include('components.users.search')
@endsection


@section('header')
  @include('components.users.header')
@endsection


@section('content')
<div class="containar" style="text-align: center">
  <span class="description">
    <img src="{{ asset('img/top.jpg')}}" width="70%" height="70%">
  </span>
</div>

<section class="py-5 text-center containe">
  <div class="container">
    <button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/original/create">オリジナルカクテルの登録</button> 
  </div>
</section>
  @include('components.users.cocktails')
@endsection