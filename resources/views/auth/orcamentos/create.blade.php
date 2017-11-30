@extends('layouts.dashboard')

@section('content')

<h1>Novo Orçamento</h1>

<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('orcamentos.store') }}">
            {{ csrf_field() }}

            <!--<table class="table">
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
            <!--Orçamento
            ==========================
            orcamentos[status]
            0 - Aguardendo Atendimento
            1 - Aguardando Orçamento
            2 - Aguardando aprovação
            3 - Aprovado
            4 - Reprovado-->
            <div class="form-group{{ $errors->has('order_service_id') ? ' has-error' : '' }}">
                <label for="order_service_id" class="col-md-4 control-label">Ordem de Serviço</label>

                <div class="col-md-6">

                    <select name="order_service_id" class="form-control">
                        @foreach($orderservices as $orderservice)
                        <option value="{{ $orderservice->id }}">{{ $orderservice->id }}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('order_service_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('order_service_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                <label for="data" class="col-md-4 control-label">Data Inicial</label>

                <div class="col-md-6">
                    <input id="data" type="text" class="form-control" name="data" value="{{ old('data') }}" required autofocus>

                    @if ($errors->has('data'))
                    <span class="help-block">
                        <strong>{{ $errors->first('data') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('entrega') ? ' has-error' : '' }}">
                <label for="entrega" class="col-md-4 control-label">Data de Entrega</label>

                <div class="col-md-6">
                    <input id="entrega" type="text" class="form-control" name="entrega" value="{{ old('entrega') }}" required autofocus>

                    @if ($errors->has('entrega'))
                    <span class="help-block">
                        <strong>{{ $errors->first('entrega') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('defeito') ? ' has-error' : '' }}">
                <label for="defeito" class="col-md-4 control-label">Defeito</label>

                <div class="col-md-6">
                    <input id="defeito" type="text" class="form-control" name="defeito" value="{{ old('defeito') }}" required autofocus>

                    @if ($errors->has('defeito'))
                    <span class="help-block">
                        <strong>{{ $errors->first('defeito') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('servico') ? ' has-error' : '' }}">
                <label for="servico" class="col-md-4 control-label">Serviço/Peças</label>

                <div class="col-md-6">
                    <input id="servico" type="text" class="form-control" name="servico" value="{{ old('servico') }}" required autofocus>

                    @if ($errors->has('servico'))
                    <span class="help-block">
                        <strong>{{ $errors->first('servico') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
                <label for="preco" class="col-md-4 control-label">Preço</label>

                <div class="col-md-6">
                    <input id="preco" type="text" class="form-control" name="preco" value="{{ old('preco') }}" required autofocus>

                    @if ($errors->has('preco'))
                    <span class="help-block">
                        <strong>{{ $errors->first('preco') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                <label for="total" class="col-md-4 control-label">Preço Total</label>

                <div class="col-md-6">
                    <input id="total" type="text" class="form-control" name="total" value="{{ old('total') }}" required autofocus>

                    @if ($errors->has('total'))
                    <span class="help-block">
                        <strong>{{ $errors->first('total') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
