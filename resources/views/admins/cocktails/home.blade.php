@extends('layouts.app')


@section('navbar')
  @include('components.admins-navbar')
@endsection


@section('header')
  @include('components.admins-header')
@endsection


@section('section')
  <ul class="nav me-auto">
    <li class="nav-item"><a href="/admin/cocktail/create" class="nav-link link-dark px-2 active" aria-current="page">カクテル登録</a></li>
    <li class="nav-item"><a href="/admin/base/create" class="nav-link link-dark px-2">ベース登録</a></li>
    <li class="nav-item"><a href="/admin/split/create" class="nav-link link-dark px-2">材料登録</a></li>
  </ul>
@endsection


@section('content')
  @include('components.admins-cocktails')
@endsection
