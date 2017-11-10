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