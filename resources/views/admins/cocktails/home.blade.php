@extends('layouts.app')

@section('search')
  @include('components.admins.search')
@endsection


@section('navbar')
  @include('components.admins.navbar')
@endsection


@section('header')
  @include('components.admins.header')
@endsection


@section('content')
  @include('components.admins.homemenu')
  @include('components.admins.cocktails')
@endsection
