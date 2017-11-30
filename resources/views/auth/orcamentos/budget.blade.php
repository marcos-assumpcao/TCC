@extends('layouts.dashboard')

@section('content')

<h1>Aprovação de Orçamento - Ordem de Serviço: {{ $orcamento->order_service_id }}<!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <td>Orçamento:</td>
      <td>{{ $orcamento->id }}</td> 
    </tr>
    <!--<tr>
      <td>Ordem de Serviço:</td>
      <td>{{ $orcamento->order_service_id }}</td>
    </tr>-->
    <tr>
      <td>Cliente:</td>
      <td>{{ Auth()->user()->name }}</td> 
    </tr>
    <tr>
      <td>Responsavel Técnico:</td>
      <td>{{ $orcamento->responsavel }}</td> 
    </tr>
    <tr>
      <td>Data Inicial:</td>
      <td>{{ $orcamento->data }}</td>
    </tr>
    <!--Aprovação de Orçamento
      ==========================
      orcamentos[status]
      0 - Aguardendo Atendimento
      1 - Aguardando Aprovação
      2 - Aprovado
      3 - Reprovado-->
      <td>Status:</td>
      @if($orcamento['status']  == 2)
      <td><font color=#FFA500>Aguardando Aprovação</font></td>
      @elseif($orcamento['status']  == 3)
      <td><font color=#32CD32>Aprovado</font></td>
      @elseif($orcamento['status']  == 4)
      <td><font color=#FF0000>Reprovado</font></td>
      @endif
    </tr>
    <tr>
      <td>Data de Aprovação:</td>
      <td>{{ $orcamento->aprovacao }}</td>
    </tr>
    <tr>
      <td>Data de Entrega:</td>
      <td>{{ $orcamento->entrega }}</td>
    </tr>
    <tr>
      <td>Defeito:</td>
      <td>{{ $orcamento->defeito }}</td>
    </tr>
    <tr>
      <td>Serviço/Peças:</td>
      <td>{{ $orcamento->servico }}</td>
    </tr>
    <tr>
      <td>Preço:</td>
      <td>{{ $orcamento->preco }}</td>
    </tr>
    <tr>
      <td>Preço Total:</td>
      <td>{{ $orcamento->total }}</td>
    </tr>
    <tr>
      <td>
        <!--Aprovação de Orçamento
        ==========================
        orderservices[status]
        0 - Aguardendo Atendimento
        1 - Em atendimento 
        2 - Aguardando aprovação
        3 - Aprovado
        4 - Reprovado-->
        @if($orcamento['status']  == 2)
        <a href="{{  route('orcamentos.aprovar', ['status' => 3, 'id' => $orcamento->id, 'id2' => $orcamento->order_service_id] ) }}" class="btn btn-success">Aprovar</a>
        <a href="{{  route('orcamentos.aprovar', ['status' => 4, 'id' => $orcamento->id, 'id2' => $orcamento->order_service_id] ) }}" class="btn btn-danger">Reprovar</a> 
        @endif
      </td>
    </tr>
  </thead>
  <tbody>

@endsection