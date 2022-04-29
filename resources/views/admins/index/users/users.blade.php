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
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
          @csrf
          <th scope="row">{{ $user->id }}</th>
          <td><input type="text" name="name" value="{{ $user->name }}"></td>
          <td><input type="text" name="email" value="{{ $user->email }}"></td>
          <td>{{ $user->created_at->format('Y/m/d h:i') }}</td>
          <td>{{ $user->updated_at->format('Y/m/d h:i') }}</td>
          <td>
            <div style="display:inline-flex">
            <button type="submit" class="btn btn-outline-dark btn-sm" onclick='return confirm("{{ $user->name }}さんを変更しますか？");'>更新</button> 
        </form>
        <form action="{{ route('admin.users.destroy' ,$user) }}" method="POST">
          @csrf
            <button type="submit" class="btn btn-outline-dark btn-sm" onclick='return confirm("{{ $user->name }}さんを削除しますか？");'>削除</button> 
          </td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection

@section('content')
  
@endsection
