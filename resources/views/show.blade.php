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
                        <p>{{ $cocktail->name }}</p>
                        <p>{{ $cocktail->base_name }}</p>
                        <p>{{ $cocktail->taste_id }}</p>
                        <p>{{ $cocktail->strength_id }}</p>
                        <p>{{ $cocktail->preparation_id }}</p>
                        <p>{{ $cocktail->glass_id }}</p>
                        <p>{{ $cocktail->how_to }}</p>
                      </div>
                    </div>
                  </section>
                
                  
                </main>        
                </body>
        </div>
    </div>
</div>
@endsection
