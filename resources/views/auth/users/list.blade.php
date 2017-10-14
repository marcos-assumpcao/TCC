@extends('layouts.dashboard')

@section('content')

          <h1>Listagem de usuarios <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

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
        <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('users.show', $user['id']) }}" class="btn btn-info">ver</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

 
@endsection
