@extends('layouts.app')

@section('content')
@include('components.top_image')


<div class="container">

    <section class="py-5 text-center container">
      <button type="button" class="btn btn-outline-dark btn-lg" onclick=location.href="/can-make/regist">材料の登録</button> 
    </section>
    
    今すぐ作れる
    @include('components.cocktails')
    {{ $cocktails->links() }}
</div>
        
@endsection
