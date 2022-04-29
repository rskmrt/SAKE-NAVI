@extends('admins.layouts.app')

@section('section')
<ul class="nav me-auto">
  <li class="nav-item"><a href="/admin/cocktail/create" class="nav-link link-dark px-2 active" aria-current="page">カクテル登録</a></li>
  <li class="nav-item"><a href="/admin/base/create" class="nav-link link-dark px-2">ベース登録</a></li>
  <li class="nav-item"><a href="/admin/split/create" class="nav-link link-dark px-2">材料登録</a></li>
</ul>
@endsection


@section('content')

<div class="container">
  <section class="py-5 container">
    <div class="col-lg-6 col-md-8 mx-auto">
      <form action="/admin/base/store"  method="POST">
			  @csrf    
				@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
				@enderror
    		<div class="mb-3">
					<label for="name" class="form-label">登録するベース</label>
					<input name="name" type="text" class="form-control">
					<button type="submit" class="btn btn-outline-dark">登録</button>  
    		</div>
				     
      </form>
    </div>
  </section>    


	<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">ベース名</th>
        <th scope="col">作成日時</th>
				<th scope="col">更新日時</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($bases as $base)
      <tr>
        <th scope="row">{{ $base->id }}</th>
        <td>{{ $base->name }}</td>
        <td>{{ $base->created_at->format('Y/m/d h:i') }}</td>
				<td>{{ $base->updated_at->format('Y/m/d h:i') }}</td>
        <td>
					<div style="display:inline-flex">
						<form action="{{ route('admin.users.edit', $user) }}" method="GET">
							<button class="button" type="submit" onclick><span class="material-symbols-rounded">edit</span></button>
						</form>
						<form action="{{ route('admin.users.destroy' ,$user) }}" method="POST">
							@csrf
							<button class="button" type="submit" onclick='return confirm("この操作は取り消せません。本当に削除しますか？");'><span class="material-symbols-rounded">delete</span></button>
						</form>
				</div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div> 

@endsection
