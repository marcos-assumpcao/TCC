@extends('layouts.dashboard')

@section('content')

<h1>Listagem de Ordens de Serviços <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Cliente</th>
      <th>Contato</th>
      <th>Equipamento</th>
      <th>Marca</th>
      <!--<th>Defeito</th>
      <th>Série</th>
      <th>Modelo</th>
      <th>Tensão</th>
      <th>Cor</th>
      <th>Ano</th>
      <th>Patrimonio</th>
      <th>Chamado</th>-->
      <th>Comandos</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderservices as $orderservice)
    <tr>
      <th scope="row">{{ $orderservice['id'] }}</th>
      <td>{{ $orderservice['users'] }}</td>
      <td>{{ $orderservice['contato'] }}</td>
      <td>{{ $orderservice['equipamento'] }}</td>
      <td>{{ $orderservice['marca'] }}</td>
      <!--<td>{{ $orderservice['defeito'] }}</td>
      <td>{{ $orderservice['serie'] }}</td>
      <td>{{ $orderservice['modelo'] }}</td>
      <td>{{ $orderservice['tensao'] }}</td>
      <td>{{ $orderservice['cor'] }}</td>
      <td>{{ $orderservice['ano'] }}</td>
      <td>{{ $orderservice['patrimonio'] }}</td>
      <td>{{ $orderservice['chamado'] }}</td>-->
      <td>
        <a href="{{ route('orderservices.edit', $orderservice['id']) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('orderservices.show', $orderservice['id']) }}" class="btn btn-info">ver</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
