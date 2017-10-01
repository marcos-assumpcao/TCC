@extends('layouts.dashboard')

@section('content')

          <h1>Listagem de Ordens de Serviços <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

          <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Cliente</th>
      <th>Fantasia</th>
      <th>Contato</th>
      <th>Equipamento</th>
      <th>Marca</th>
      <th>Defeito</th>
      <th>Série</th>
      <th>Modelo</th>
      <th>Tensão</th>
      <th>Cor</th>
      <th>Ano</th>
      <th>Anexos</th>
      <th>Observações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderservices as $orderservice)
    <tr>
      <th scope="row">{{ $user['id'] }}</th>
      <td>{{ $orderservice['cliente'] }}</td>
      <td>{{ $orderservice['fantasia'] }}</td>
      <td>{{ $orderservice['contato'] }}</td>
      <td>{{ $orderservice['equipamento'] }}</td>
      <td>{{ $orderservice['marca'] }}</td>
      <td>{{ $orderservice['defeito'] }}</td>
      <td>{{ $orderservice['serie'] }}</td>
      <td>{{ $orderservice['modelo'] }}</td>
      <td>{{ $orderservice['tensao'] }}</td>
      <td>{{ $orderservice['cor'] }}</td>
      <td>{{ $orderservice['ano'] }}</td>
      <td>{{ $orderservice['anexos'] }}</td>
      <td>{{ $orderservice['observacao'] }}</td>
      <td>
        <a href="{{ route('orderservices.edit', $orderservices['id']) }}" class="btn btn-primary">Editar</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

 
@endsection
