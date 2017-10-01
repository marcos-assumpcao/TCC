@extends('layouts.dashboard')

@section('content')

          <h1>Listagem de usuarios <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

          <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Comandos</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user['id'] }}</th>
      <td>{{ $user['name'] }}</td>
      <td>{{ $user['email'] }}</td>
      <td>
        <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-primary">Editar</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

 
@endsection
