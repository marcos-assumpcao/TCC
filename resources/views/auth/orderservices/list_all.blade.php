@extends('layouts.dashboard')

@section('content')

<h1>Ordens de Serviços</h1>
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

        <!--Aprovação de Orçamento
        ==========================
        orcamentos[status]
        0 - Aguardendo Atendimento
        1 - Aguardando Orçamento
        2 - Aguardando aprovação
        3 - Aprovado
        4 - Reprovado-->

        <!--Atendimento
        ==========================
        orderservices[status]
        0 - Aguardendo Atendimento
        1 - Em atendimento 
        2 - Aguardando aprovação
        3 - Aprovado
        4 - Reprovado-->
      <td>
        @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
        @if($orderservice['status']  == 0)
        <a href="{{  route('orderservices.atender', ['status' => 1, 'id' => $orderservice->id] ) }}" class="btn btn-primary">Atender</a>
        @endif
        @endif
        <!--@if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
        @if($orderservice['status']  == 1)
        <a href="{{ route('orcamentos.create') }}" class="btn btn-primary">Criar Orçamento</a>
        @endif
        @endif-->
        @if($orderservice['status'] != 3 && $orderservice['status'] != 4)
        <a href="{{ route('orderservices.edit', $orderservice['id']) }}" class="btn btn-secondary">Editar</a>
        @endif
        <a href="{{ route('orderservices.show', $orderservice['id']) }}" class="btn btn-info">ver</a>
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
