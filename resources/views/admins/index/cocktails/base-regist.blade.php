@extends('admins.layouts.app')

@section('section')

@endsection


@section('content')

<div class="container">
  <section class="py-5 container">
    <div class="col-lg-6 col-md-8 mx-auto">
      <form action="/admin/base/store" method="POST">
			  @csrf    
				@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
    		<div class="mb-3">
					<label for="name" class="form-label">登録するベース</label>
					<input name="name" type="text" class="form-control">
    		</div>
				<button type="submit" class="btn btn-outline-dark">登録</button>       
      </form>
    </div>
  </section>    
</div> 

@endsection
