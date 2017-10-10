@extends('layouts.dashboard')

@section('content')

<h1>Listagem de Ordens de Serviços <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Ordem de Serviço</th>
      <th>Data Inicial</th>
      <th>Data de Aprovação</th>
      <th>Data de Entrega</th>
      <th>Defeito</th>
      <th>Serviço/Peças</th>
      <th>Preço</th>
      <th>Preço total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderservices as $orderservice)
    <tr>
      <th scope="row">{{ $user['id'] }}</th>
      <td>{{ $orderservice['orderservices'] }}</td>
      <td>{{ $orderservice['data'] }}</td>
      <td>{{ $orderservice['aprovacao'] }}</td>
      <td>{{ $orderservice['entrega'] }}</td>
      <td>{{ $orderservice['defeito'] }}</td>
      <td>{{ $orderservice['servico'] }}</td>
      <td>{{ $orderservice['preco'] }}</td>
      <td>{{ $orderservice['total'] }}</td>
      <td>
        <a href="{{ route('orderservices.edit', $orderservices['id']) }}" class="btn btn-primary">Editar</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
