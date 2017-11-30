@extends('layouts.dashboard')

@section('content')

<!--@if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
<h1>Listagem de usuarios</h1>
@elseif(Auth::user()->grupo == 3)
<h1>Usuario Logado</h1>
@endif-->
<h1>Listagem de usuarios</h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Fantasia</th>
      <!--<th>Aniversario</th>
      <th>Endereço</th>
      <th>Bairro</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>CEP</th>
      <th>Site</th>
      <th>Insc. Estadual</th>
      <th>CPF/CNPJ</th>
      <th>Telafone</th>
      <th>Celular</th>
      <th>FAx</th>-->
      <th>Email</th>
      <th>Comandos</th>
      <th><i class="fa fa-trash"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user['id'] }}</th>
      <td>{{ $user['name'] }}</td>
      <td>{{ $user['fantasia'] }}</td>
      <!--<td>{{ $user['aniversario'] }}</td>
      <td>{{ $user['endereco'] }}</td>
      <td>{{ $user['bairro'] }}</td>
      <td>{{ $user['cidade'] }}</td>
      <td>{{ $user['estado'] }}</td>
      <td>{{ $user['cep'] }}</td>
      <td>{{ $user['site'] }}</td>
      <td>{{ $user['insc_estadual'] }}</td>
      <td>{{ $user['cpf_cnpj'] }}</td>
      <td>{{ $user['telefone'] }}</td>
      <td>{{ $user['celular'] }}</td>
      <td>{{ $user['fax'] }}</td>-->
      <td>{{ $user['email'] }}</td>
      <td>
        <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-secondary">Editar</a>
        <a href="{{ route('users.show', $user['id']) }}" class="btn btn-info">ver</a>
      <td>
        
        <!--Grupos de Usuario
        =====================
        1 - Administrador
        2 - Colaborador
        3 - Usuario-->
        @if(Auth::user()->grupo == 1)
        <form method="POST" action="{{ route('users.destroy', $user['id']) }}">
            <input name="_method" type="hidden" value="DELETE">
            {{ csrf_field() }}
          <button tipe="submmit" class="btn btn-danger">Excluir</button>
        </form>
        @endif
      </td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

 
@endsection
