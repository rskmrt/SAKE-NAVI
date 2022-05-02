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

<section class="py-3 text-center containe">
  <div class="container">
    <h2>{{ $cocktail->name }}</h4>
  </div>
</section>


<div class="col-lg-7 col-md-8 mx-auto">  
  <div class="row py-5">
    <div class="col-5 text-center">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    </div>
    <div class="col-7" style="padding-left: 10%">
      <div class="row align-items-start">
        <p>
          <div class="col-4">
            ベース
          </div>
          <div class="col-8">
            @foreach($base as $value)
            {{ ($value->name) }}
            @endforeach
          </div>
        </p>
      </div>

      <div class="row align-items-center">
        <div class="col-4">
          テイスト
        </div>
        <div class="col-8">
          {{ $cocktail->taste_name }}
        </div>
      </div>

      <div class="row align-items-center">
        <p>
        <div class="col-4">
          アルコール度数
        </div>
        <div class="col-8">
          {{ $cocktail->strength_name }}
        </div>
      </div>

      <div class="row align-items-center">
        <p>
        <div class="col-4">
          技法
        </div>
        <div class="col-8">
          {{ $cocktail->technique_name }}
        </div>
      </div>

      <div class="row align-items-end">
        <p>
        <div class="col-4">
          グラスタイプ
        </div>
        <div class="col-8">
          {{ $cocktail->glass_name }}
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-1">
    </div>
    <div class="col-3">
      材料
      <table class="table">
        <tbody>
          @foreach($split as $value)
          <tr>
            <td>
              {{ ($value->name) }}
            </td>
          </tr>
          @endforeach
        </tbody> 
      </table>
    </div>
    <div class="col-1">
    </div>
    <div class="col-6">
      作り方
      <div>
        {{ $cocktail->how_to }}
      </div>
    </div>
    <div class="col-1">
    </div>
  </div>
</div>

@endsection
