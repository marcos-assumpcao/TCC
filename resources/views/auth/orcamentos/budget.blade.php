<h1>Orçamento da Ordem de Serviço: {{ $orcamento->orderservices }}<!--<a href="#" type="button" class="btn btn-success float-right">Novo</a>--></h1>

<table class="table">
  <thead>
    <tr>
      <td>ID:</td>
      <td>{{ $orcamento->id }}</td> 
    </tr>
    <tr>
      <td>Ordem de Serviço:</td>
      <td>{{ $orcamento->orderservices }}</td>
    </tr>
    <tr>
      <td>Data Inicial:</td>
      <td>{{ $orcamento->data }}</td>
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
        <a href="#" class="btn btn-success">Aprovar</a>
        <a href="#" class="btn btn-danger">Reprovar</a> 
      </td>
    </tr>
  </thead>
  <tbody>

@endsection