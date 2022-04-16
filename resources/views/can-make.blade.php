@extends('layouts.app')

@section('content')
@include('components.top_image')


<div class="container">
    <section class="py-5 text-center container">
      <div class="row py-lg-1">
        <h1 class="fw-light"><button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/can-make/regist">材料の登録</button></h1>
        
      </div>
    </section>
    
    今すぐ作れる
  <div class="album py-5 bg-light">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($cocktails as $cocktail)
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">
                  {{ $cocktail->name }}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick=location.href='home/show/{{ $cocktail->id }}'>view</button> 
                </div>
                
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
        
@endsection
