@extends('layouts.dashboard')

@section('content')

<h1>Listagem de Orçamentos Cliente<!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Ordem de Serviço</th>
      <th>Data Inicial</th>
      <!--<th>Data de Aprovação</th>
      <th>Data de Entrega</th>
      <th>Defeito</th>
      <th>Serviço/Peças</th>
      <th>Preço</th>-->
      <th>Preço total</th>
      <th>Comandos</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orcamentos as $orcamento)
    <tr>
      <th scope="row">{{ $orcamento['id'] }}</th>
      <td>{{ $orcamento['orderservices'] }}</td>
      <td>{{ $orcamento['data'] }}</td>
      <!--<td>{{ $orcamento['aprovacao'] }}</td>
      <td>{{ $orcamento['entrega'] }}</td>
      <td>{{ $orcamento['defeito'] }}</td>
      <td>{{ $orcamento['servico'] }}</td>
      <td>{{ $orcamento['preco'] }}</td>-->
      <td>{{ $orcamento['total'] }}</td>
      <td>
        <a href="{{ route('orcamentos.approve', $orcamento['id']) }}" class="btn btn-success">Orçamento</a>
        <a href="{{ route('orcamentos.edit', $orcamento['id']) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('orcamentos.show', $orcamento['id']) }}" class="btn btn-info">ver</a>
        <a href="#" class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
