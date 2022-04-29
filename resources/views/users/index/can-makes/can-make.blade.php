@extends('users.layouts.app')

@section('image')
  @include('components.top_image')
@endsection


@section('section')
  <button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/can-make/create">材料の登録</button> 
@endsection


@section('content')
  @include('components.cocktails')
@endsection