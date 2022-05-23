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
    <h2>{{ $cocktail->cocktail_name }}</h4>
  </div>
</section>


<div class="container col-lg-5 col-md-5 mx-auto">  
  <div class="row py-3">
    <div class="col text-center">
      @if(empty($cocktail->image))
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">no image</text></svg>
      @else
      <img src="{{ asset('storage/' . $cocktail->image) }}" style="width: 100%; height: auto">
      @endif
    </div>
  </div>

  
  <table class="table table-borderless py-5">
    <tbody>
      <tr>
        <td style="white-space: nowrap;">ベース</td>
        <td>
          @foreach($base as $value)
            <span style="margin-right: 5px">{{ ($value->name) }}</span>
          @endforeach
        </td>
      </tr>

      <tr>
        <td style="white-space: nowrap;">材料</td>
        <td>
          @foreach($split as $value)
          <span style="margin-right: 5px">{{ ($value->name) }}</span>
          @endforeach
        </td>
      </tr>

      <tr>
        <td style="white-space: nowrap;">テイスト</td>
        <td>{{ $cocktail->taste_name }}</td>
      </tr>

      <tr>
        <td style="white-space: nowrap;">アルコール度数</td>
        <td>{{ $cocktail->strength_name }}</td>
      </tr>

      <tr>
        <td style="white-space: nowrap;">技法</td>
        <td>{{ $cocktail->technique_name }}</td>
      </tr>

      <tr>
        <td style="white-space: nowrap;">グラスタイプ</td>
        <td>{{ $cocktail->glass_name }}</td>
      </tr>

    </tbody>
  </table>

  <div class="row">  
    <div class="col">
      <span style="border-bottom: 1px solid rgb(0, 0, 0);">作り方</span>
      <div >
        {{ $cocktail->how_to }}
      </div>
    </div>
  </div>

  <div class="py-5 text-center">
    <button type="button" class="btn btn-outline-dark " onclick=location.href='/home' >戻る</button>
  </div>

</div>

@endsection
