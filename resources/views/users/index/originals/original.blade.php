@extends('users.layouts.app')

@section('image')
  @include('users.components.top_image')
@endsection


@section('section')    
  <button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/original/create">オリジナルカクテルの登録</button> 
@endsection
    
     
@section('content')
  @include('users.components.cocktails')
@endsection