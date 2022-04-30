@extends('layouts.app')

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


<div class="col-lg-6 col-md-8 mx-auto">  
  <div class="row  py-5">
    <div class="col-5">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    </div>
    <div class="col-7">
      <div class="row justify-content-start">
        <div class="col-1">
        </div>
        <div class="col-5">
          <p>ベース</p>
          <p>テイスト</p>
          <p>アルコール度数</p>
          <p>製法</p>
          <p>グラスタイプ</p>
        </div>
        <div class="col-5">
          @foreach($base as $value)
          <p>{{ ($value->name) }}</p>
          @endforeach
          @foreach($taste as $value)
          <p>{{ ($value->name) }}</p>
          @endforeach
          @foreach($strength as $value)
          <p>{{ ($value->name) }}</p>
          @endforeach
          @foreach($technique as $value)
          <p>{{ ($value->name) }}</p>
          @endforeach
          @foreach($glass as $value)
          <p>{{ ($value->name) }}</p>
          @endforeach
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
