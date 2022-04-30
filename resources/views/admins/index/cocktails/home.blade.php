@extends('admins.layouts.app')

@section('section')

<ul class="nav me-auto">
  <li class="nav-item"><a href="/admin/cocktail/create" class="nav-link link-dark px-2 active" aria-current="page">カクテル登録</a></li>
  <li class="nav-item"><a href="/admin/base/create" class="nav-link link-dark px-2">ベース登録</a></li>
  <li class="nav-item"><a href="/admin/split/create" class="nav-link link-dark px-2">材料登録</a></li>
</ul>

@endsection


@section('content')
  @include('admins.components.cocktails')
@endsection
