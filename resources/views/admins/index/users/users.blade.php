@extends('admins.layouts.app')

@section('section')
  
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">名前</th>
        <th scope="col">E-mail</th>
        <th scope="col">作成日時</th>
				<th scope="col">更新日時</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
				<td>{{ $user->updated_at }}</td>
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

@endsection

@section('content')
  
@endsection
