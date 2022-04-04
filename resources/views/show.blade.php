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
                
                  {{ $cocktail->name }}
                </main>        
                </body>
        </div>
    </div>
</div>
@endsection
