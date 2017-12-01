@extends('layouts.dashboard')

@section('content')

<h1>Orçamentos dos Clientes</h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Ordem de Serviço</th>
      <th>Data Inicial</th>
      <th>Status:</th>
      <!--<th>Data de Aprovação</th>
      <th>Data de Entrega</th>
      <th>Defeito</th>
      <th>Serviço/Peças</th>
      <th>Preço</th>-->
      <th>Preço total</th>
      <th>Comandos</th>
      <th><i class="fa fa-trash"></i></th>
    </tr>
  </thead>
  <tbody>
    @foreach($orcamentos as $orcamento)
    <tr>
      <th scope="row">{{ $orcamento['id'] }}</th>
      <td>{{ $orcamento['order_service_id'] }}</td>
      <td>{{ $orcamento['data'] }}</td>
      <!--Aprovação de Orçamento
      ==========================
      orcamentos[status]
      0 - Aguardendo Atendimento
      1 - Aguardando Orçamento
      2 - Aguardando aprovação
      3 - Aprovado
      4 - Reprovado-->
      @if($orcamento['status']  == 2)
        <td><font color=#FFA500>Aguardando Aprovação</font></td>
      @elseif($orcamento['status']  == 3)
        <td><font color=#32CD32>Aprovado</font></td>
      @elseif($orcamento['status']  == 4)
        <td><font color=#FF0000>Reprovado</font></td>
      @endif
      <!--<td>{{ $orcamento['aprovacao'] }}</td>
      <td>{{ $orcamento['entrega'] }}</td>
      <td>{{ $orcamento['defeito'] }}</td>
      <td>{{ $orcamento['servico'] }}</td>
      <td>{{ $orcamento['preco'] }}</td>-->
      <td>{{ $orcamento['total'] }}</td>
      <td>
        <!--Aprovação de Orçamento
        ==========================
        orcamentos[status]
        0 - Aguardendo Atendimento
        1 - Aguardando Orçamento
        2 - Aguardando aprovação
        3 - Aprovado
        4 - Reprovado-->
        <!--@if($orcamento['status']  == 2)
        <a href="{{ route('orcamentos.approve', $orcamento['id']) }}" class="btn btn-primary">Orçamento</a>
        @endif-->
        <!--Grupos de Usuario
        =====================
        1 - Administrador
        2 - Colaborador
        3 - Usuario-->
        @if(Auth::user()->grupo == 1 OR 2)
        <!--Aprovação de Orçamento
        ==========================
        orderservices[status]
        0 - Aguardendo Atendimento
        1 - Em atendimento 
        2 - Aguardando aprovação
        3 - Aprovado
        4 - Reprovado-->
        @if($orcamento['status'] != 3 && $orcamento['status'] != 4)
        <a href="{{ route('orcamentos.edit', $orcamento['id']) }}" class="btn btn-secondary">Editar</a>
        @endif
        @endif
        <a href="{{ route('orcamentos.show', $orcamento['id']) }}" class="btn btn-info">ver</a>
      </td>
      <td>
        <!--Grupos de Usuario
        =====================
        1 - Administrador
        2 - Colaborador
        3 - Usuario-->
        @if(Auth::user()->grupo == 1)
        <form method="POST" action="{{ route('orcamentos.destroy', $orcamento['id']) }}">
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
