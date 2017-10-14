@extends('layouts.dashboard')

@section('content')

<h1>Usuario {{ $user->name }}<!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <td>ID:</td>
      <td>{{ $user['id'] }}</td> 
    </tr>
    <tr>
      <td>Nome:</td>
      <td>{{ $user->name }}</td>
    </tr>
    <tr>
      <td>Nome fantasia:</td>
      <td>{{ $user->fantasia }}</td>
    </tr>
    <tr>
      <td>Aniversario:</td>
      <td>{{ $user->aniversario }}</td>
    </tr>
    <tr>
      <td>Endereço:</td>
      <td>{{ $user->endereco }}</td>
    </tr>
    <tr>
      <td>Bairro:</td>
      <td>{{ $user->bairro }}</td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td>{{ $user->cidade }}</td>
    </tr>
    <tr>
      <td>Estado:</td>
      <td>{{ $user->estado }}</td>
    </tr>
    <tr>
      <td>CEP:</td>
      <td>{{ $user->cep }}</td>
    </tr>
    <tr>
      <td>Site:</td>
      <td>{{ $user->site }}</td>
    </tr>
    <tr>
      <td>Insc. Estadaual:</td>
      <td>{{ $user->insc_estadual }}</td>
    </tr>
    <tr>
      <td>CPF/CNPJ:</td>
      <td>{{ $user->cpf_cnpj }}</td>
    </tr>
    <tr>
      <td>Telefone:</td>
      <td>{{ $user->telefone }}</td>
    </tr>
    <tr>
      <td>Celular:</td>
      <td>{{ $user->celular }}</td>
    </tr>
    <tr>
      <td>Fax:</td>
      <td>{{ $user->fax }}</td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td>{{ $user->email }}</td>
    </tr>
  </thead>
  <tbody>

@endsection