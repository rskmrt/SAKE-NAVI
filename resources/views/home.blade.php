@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            
        
            <body>
                <main>
                  <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                      <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Search</h1>
                        <div class="input-group">
                          <input type="text" id="txt-search" class="form-control input-group-prepend" placeholder="フリーワード"></input>
                          <span class="input-group-btn input-group-append">
                            <submit type="submit" id="btn-search" class="btn btn-primary"><i class="fas fa-search"></i> 検索</submit>
                          </span>
                        </div>
                        
                      </div>
                    </div>
                  </section>
                
                  <div class="album py-5 bg-light">
                    <div class="container">
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
                                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="show/{{ $cocktail->id }}">view</a></button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary"><span class="material-icons">favorite_border</span></button>
                                </div>
                                <small class="text-muted">9 mins</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  {{ $cocktails->links() }}
                </main>        
                </body>
        </div>
    </div>
</div>
@endsection
