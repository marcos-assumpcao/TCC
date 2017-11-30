@extends('layouts.dashboard')

@section('content')

<h1>Order de Serviço</h1>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<table class="table">
  @foreach($orderservices as $orderservice)
  <thead>
    <tr>
      <td>Cliente:</td>
      <td>{{ $orderservice->user->name }}</td> 
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
      <td>Modelo:</td>
      <td>{{ $orderservice['modelo'] }}</td> 
    </tr>
  </thead>
  @endforeach
<tbody>-->

@endsection
