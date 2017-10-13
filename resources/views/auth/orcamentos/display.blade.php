@extends('layouts.dashboard')

@section('content')

<h1>Orçamento <!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <th scope="row">1</th>
      <th>ID</th>
      <th>Ordem de Serviço</th>
      <th>Data Inicial</th>
      <th>Data de Aprovação</th>
      <th>Data de Entrega</th>
      <th>Defeito</th>
      <th>Serviço/Peças</th>
      <th>Preço</th>
      <th>Preço total</th>
      <th>Comandos</th>
    <tr>
  </thead>
  <tbody>
    @foreach($orcamentos as $orcamento)
    <tr>
      <th scope="row">{{ $orcamento['id'] }}</th>
      <th>{{ $orcamento['orderservices'] }}</th>
      <th>{{ $orcamento['data'] }}</th>
      <th>{{ $orcamento['aprovacao'] }}</th>
      <th>{{ $orcamento['entrega'] }}</th>
      <th>{{ $orcamento['defeito'] }}</th>
      <th>{{ $orcamento['servico'] }}</th>
      <th>{{ $orcamento['preco'] }}</th>
      <th>{{ $orcamento['total'] }}</th>
    <tr>     
    @endforeach
    </tbody>
  </table>

@endsection