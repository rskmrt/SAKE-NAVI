@extends('layouts.app')

@section('image')
  @include('components.top_image')
@endsection


@section('section')
  @include('components.search')
@endsection



@section('content')
  @include('components.cocktails')
@endsection
