@extends('layouts.app')

@section('content')



     
          <section class="py-5 ">
            <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">

                
                  <div class="row">

                    <div class="col-4">
                      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    </div>

                    <div class="col-8">
                      <div class="container">
                        <div class="row justify-content-start">
                          <div class="col-4">
                            <p>ベース</p>
                            <p>テイスト</p>
                            <p>アルコール度数</p>
                            <p>製法</p>
                            <p>グラスタイプ</p>
                          </div>
                          <div class="col-4">
                            <p>{{ $cocktail->base_name }}</p>
                            <p>{{ $cocktail->taste_name }}</p>
                            <p>{{ $cocktail->strength_name }}</p>
                            <p>{{ $cocktail->preparation_name }}</p>
                            <p>{{ $cocktail->glass_name }}</p>
                            <p>{{ $cocktail->how_to }}</p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                  </div>

                
                
                
              </div>
            </div>
          </section>     
        


@endsection
