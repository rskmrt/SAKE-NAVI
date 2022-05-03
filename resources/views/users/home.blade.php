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

  <div class="containar" style="text-align: center">
    <span class="description">
      <img src="{{ asset('img/top.jpg')}}" width="70%" height="70%">
    </span>
  </div>

  @include('components.users.cocktails')
@endsection
