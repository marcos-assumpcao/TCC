@extends('layouts.dashboard')

@section('content')

<h1>Ordem de Serviço do cliente {{ $orderservice->users }}<!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <td>ID:</td>
      <td>{{ $orderservice['id'] }}</td> 
    </tr>
    <tr>
  <!--Aprovação de Orçamento
      ==========================
      orcamentos[status]
      0 - Aguardendo Atendimento
      1 - Aguardando Aprovação
      2 - Aprovado
      3 - Reprovado-->
      <td>Status:</td>
      @if($orderservice['status']  == 0)
      <td><font color=#0000CD>Aguardando Atendimento</font></td>
      @elseif($orderservice['status']  == 1)
      <td><font color=#FFA500>Em Atendimento</font></td>
      @elseif($orderservice['status']  == 2)
      <td><font color=#FFA500>Aguardando Aprovação</font></td>
      @elseif($orderservice['status']  == 3)
      <td><font color=#32CD32>Aprovado</font></td>
      @elseif($orderservice['status']  == 4)
      <td><font color=#FF0000>Reprovado</font></td>
      @endif
    </tr>
    <tr>
      <td>Cliente:</td>
      <td>{{ $orderservice->user->name }}</td> 
    </tr>
    <tr>
      <td>Contato:</td>
      <td>{{ $orderservice['contato'] }}</td> 
    </tr>
    <tr>
      <td>Equipamento:</td>
      <td>{{ $orderservice['equipamento'] }}</td> 
    </tr>
    <tr>
      <td>Marca:</td>
      <td>{{ $orderservice['marca'] }}</td> 
    </tr>
    <tr>
      <td>Defeito:</td>
      <td>{{ $orderservice['defeito'] }}</td> 
    </tr>
    <tr>
      <td>Serie:</td>
      <td>{{ $orderservice['serie'] }}</td> 
    </tr>
    <tr>
      <td>Modelo:</td>
      <td>{{ $orderservice['modelo'] }}</td> 
    </tr>
    <tr>
      <td>Tensão:</td>
      <td>{{ $orderservice['tensao'] }}</td> 
    </tr>
    <tr>
      <td>Cor:</td>
      <td>{{ $orderservice['cor'] }}</td> 
    </tr>
    <tr>
      <td>Ano:</td>
      <td>{{ $orderservice['ano'] }}</td> 
    </tr>
    <tr>
      <td>Patrimonio:</td>
      <td>{{ $orderservice['patrimonio'] }}</td> 
    </tr>
    <tr>
      <td>Chamado:</td>
      <td>{{ $orderservice['chamado'] }}</td> 
    </tr>
  </thead>
  <tbody>

@endsection