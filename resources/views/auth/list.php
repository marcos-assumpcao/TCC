@extends('layouts.dashboard')

@section('content')

<h1>Listagem de Ordens de Serviços <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <th><i class="fa fa-trash"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach($orderservices as $orderservice)
    
    <tr>
      <th scope="row">{{ $orderservice['id'] }}</th>
      <td>{{ $orderservice->user->name }}</td>
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
        <a href="{{ route('orcamentos.budget', $orcamento['id']) }}" class="btn btn-info">Orcamento</a>
      </td> 
      <td>

        <!--Grupos de Usuario
        =====================
        1 - Administrador
        2 - Colaborador
        3 - Usuario-->
        @if(Auth::user()->grupo == 1)
        <form method="POST" action="{{ route('orderservices.destroy', $orderservice['id'] ) }}">
          <input name="_method" type="hidden" value="DELETE">
            {{ csrf_field() }}
          <button tipe="submmit" class="btn btn-danger">Excluir</button>
        </form>
        @endif
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection